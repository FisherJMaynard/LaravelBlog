@extends('layouts/main')

@section('content')

<div>     
      <ul>
 @foreach ($PostArticle as $Post)
 <?php $author = \App\Post::find($Post->post_author)->author ?>
                       <li> {{ $author->name}}</li>
                       <li> {{ $Post->created_at}}</li>
                       <li> {{ $Post->post_content}}</li>
                       @endforeach 
               </ul>       
</div>                   
@endsection

