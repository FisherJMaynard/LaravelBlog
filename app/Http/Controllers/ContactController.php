<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    function index(){
    	return view('contact');
    }

 /*   function articles(){
    	return view('articles');
    }

    function home(){
    	return view('welcome');
    }
 */
}
