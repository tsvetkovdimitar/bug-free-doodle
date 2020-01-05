<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {

        $this->middleware('isAdmin');

    }

    public function index(){

        return "You see this page because you are admin";

    }

}
