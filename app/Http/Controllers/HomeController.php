<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
//        $user = Auth::user();
//
//        return view('home', compact('user'));

        //admin
//        $request->session()->put(['dimitar'=>'master instructor']);

//        return view('home');

        //student
//        session(['Daniela'=>'student']);

        //delete one
//        $request->session()->forget('daniela');
//
//        Delete all
//        $request->session()->flush();

//        Show all
//        return $request->session()->all();

        //student 2
//        session(['daniela'=>'a student']);
//
//        return session('daniela');

//        Flashing
//        $request->session()->flash('message', 'Post has been created');
//
//        return $request->session()->get('message');

//        Keep data a bit longer
//        $request->session()->reflash();
//
//        $request->session()->keep('message');

    }
}
