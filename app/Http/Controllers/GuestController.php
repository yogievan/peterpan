<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function authLogin(Request $request){
        // validate
        $request -> validate([
           'username' => 'required',
           'password' => 'required',
       ]);

       // validate input request
       $datalogin = [
           'username' => $request -> username,
           'password' => $request -> password,
       ];
       if(Auth::attempt($datalogin)){
           //hak akses
           if(Auth::user()->role == 'asdos'){
               // excample direct to index
               return redirect('/index');
           } 
           // add more access 
           // elseif(Auth::user()->role == '<Role name>'){
               // return redirect('<URL>');
           // }
       }
       else{
           return redirect('/')->withErrors('Email atau Password tidak sesuai!');
       }
    }
    public function logout(){
        Auth::logout();
        return redirect('/');
    }
}