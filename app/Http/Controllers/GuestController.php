<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    public function index(){
        return view('guest/index');
    }

    public function logindosen(){
        return view('guest/logindosen');
    }

    public function loginbiro2(){
        return view('guest/loginbiro2');
    }

    public function loginasdos(){
        return view('guest/loginasdos');
    }
}
