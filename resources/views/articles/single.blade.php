@extends('layouts/main')

@section('MainContent')

<div>     
      <ul>
   
 @foreach ($postArticle as $post)
 <?php $author = \App\Post::find($post->post_author)->author ?>
                       <li> {{ $author->name}}</li>
                       <li> {{ $post->created_at}}</li>
                       <li> {{ $post->post_content}}</li>
 @endforeach 
               </ul>       
</div>   

<div>
@yield('articleForm')
</div>

<div>
@yield('confirmationMessage')
</div>



@endsection

