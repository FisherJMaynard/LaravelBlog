<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Traits\ShowComments;

class ArticlesController extends Controller
{
    use ShowComments;
// get all posts in DB ordered by desc
    public function index(){
        
        $posts = \App\Post::orderBy('post_date','desc')->get();
        return view('articles', ['Posts' => $posts]);
    }

    // get the specified post with $post_title
    public function show( $post_title ) {
        $onePost = \App\Post:: where ( 'post_title' , $post_title )->get() ; 
        $comments = $this->process($post_title);

        return view ('articles.comments' , ['comments' => $comments, 'postArticle' => $onePost]);
        }



}
