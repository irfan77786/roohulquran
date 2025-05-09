<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){


        return view('home');
        
    }

    public function about(){
        return view('about');
        
    }

    public function contactUs(){
        return view('contact-us');
        
    }

    public function courses(){
        return view('courses');
        
    }

    public function events(){
        return view('events');
        
    }

    public function pricing(){
        return view('pricing');
        
    }
}
