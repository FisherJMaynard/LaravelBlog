<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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

    public function showAdmin() {  

        $users = \App\User::orderBy('role','asc')->get();
        return view ('administration.usersCRUD', ['users' => $users]);
    }


    



}
