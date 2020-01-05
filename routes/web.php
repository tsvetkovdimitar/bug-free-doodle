<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
//    return view('welcome');

    $user = Auth::user();

    if($user->isAdmin()){

        echo "This user is admin";

    }

});

//Checking if copy to /var/www/html works

//Route::get('/test', function(){
//
//    echo "TEST";
//
//});

//Showing how authentication works

//Route::get('/', function(){
//
//    if(Auth::check()){
//
//        return "the user is logged in.";
//
//    }
//
//});


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin/user/roles', ['middleware'=>'role', function(){

    return "Middleware role";

}]);
