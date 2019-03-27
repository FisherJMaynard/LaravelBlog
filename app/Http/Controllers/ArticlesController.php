<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // function index(){

    // 	return view('articles');
    // }

    public function index()
    {
        
        return view('articles');
        
    }

    public function show( $post_title ) {
        $Post = \App\Post:: where ( 'post_title' , $post_title )->first(); //get  first post with post_nam == $post_name
        return view ( 'articles/single' , ['PostArticle' => $Post]);

        }

/*
    function home(){
    	return view('welcome');
    }

    function contact(){`
    	return view('contact');
    }
*/

}
