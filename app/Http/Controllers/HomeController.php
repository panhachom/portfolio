<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(Request $request){
        
        return view('home.index');
    }

    public function resume(Request $request){
        
        return view('home.resume');
    }

    public function contact(Request $request){
        
        return view('home.contact');
    }
    
    public function about_me(Request $request){
        
        return view('home.about_me');
    }
}
