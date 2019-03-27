<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        
        $posts = \App\Post::orderBy('post_date','desc')->take(3)->get();
        return view('welcome', ['Posts' => $posts]);
    	
    }

    function articles(){
    	return view('articles');
    }

    function contact(){
    	return view('contact');
    }

}
