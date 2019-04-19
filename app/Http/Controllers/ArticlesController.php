<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
    // function index(){

    // 	return view('articles');
    // }

    public function index(){
        $posts = \App\Post::orderBy('post_date','desc')->get();
        return view('articles', ['Posts' => $posts]);
    	
    }

    public function show( $post_title ) {
        $OnePost = \App\Post:: where ( 'post_title' , $post_title )->get() ; 
        return view ( 'articles.single' , ['PostArticle' => $OnePost]);

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
