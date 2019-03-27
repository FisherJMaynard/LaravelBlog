@extends('layouts/main')

@section('content')
<h1>Home</h1>

<div>
            
      <?php var_dump($PostArticle) ?>
 @foreach ($PostArticle as $Post)
                       <li> {{ $Post->post_author}}</li>
                       <li> {{ $Post->created_at}}</li>
                       <li> {{ $Post->post_content}}</li>
                       @endforeach 
                      
</div>                   
@endsection

