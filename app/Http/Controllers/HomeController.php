<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
   public function index()
    {
        return view('home');  
    }
     public function google_page()
    {
        return view('googlepage');  
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
