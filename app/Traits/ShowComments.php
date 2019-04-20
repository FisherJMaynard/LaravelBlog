<?php
namespace App\Traits;


trait ShowComments {

public function process($post_title) {
    $posts = \App\Post:: where ( 'post_title' , $post_title )->get() ; 
    $post_id;
    foreach ($posts as $post) {
        $post_id= $post->id;
    }
    
    $allComments = \App\Comment:: where ( 'post_id' , $post_id)->get() ; 
    return  $allComments;
}
}

?>