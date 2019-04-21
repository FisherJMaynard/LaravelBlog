<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Must be authenticated to go further using this controller
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

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

    public function showVip() {
        return view ('articles VIP');
    }

    function showAccount(){
    	return view('userAccount');
    }

    



}
