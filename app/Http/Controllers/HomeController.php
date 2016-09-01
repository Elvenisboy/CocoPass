<?php

namespace App\Http\Controllers;

use App\Password;
use Illuminate\Http\Request;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user_id = \Auth::user()->id;
        $passwords = Password::where('user_id',$user_id)->get();
        return view('home',compact('passwords'));
    }
    public function store_password()
    {
        return view('passwords.store_password');
    }
}