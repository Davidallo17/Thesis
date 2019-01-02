<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function login(){
        return view('pages.login');
    }
    public function loginError(){
        return view('pages.loginError');
    }
    public function home(){
        return view('pages.home');
    }
    public function devices(){
        return view('pages.devices');
    }
    public function status(){
        return view('pages.status');
    }
    public function nodeOne(){
        return view('pages.nodeOne');
    }
    public function users(){
        return view('pages.Users');
    }
}
