<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ArticlesController extends Controller
{
// get all posts in DB ordered by desc
    public function index(){
        $posts = \App\Post::orderBy('post_date','desc')->get();
        return view('articles', ['Posts' => $posts]);
    	
    }

    // get the specified post with $post_title
    public function show( $post_title ) {
        $OnePost = \App\Post:: where ( 'post_title' , $post_title )->get() ; 
        return view ( 'articles.single' , ['PostArticle' => $OnePost]);

        }



}
