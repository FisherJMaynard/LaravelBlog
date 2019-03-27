@extends('layouts/main')

@section('content')
<h1>Home</h1>

<table>
                    <thead>
                        <td>Title</td>
                       
                        <td>Creation Date</td>
                       
                    </thead>
                    <tbody>
                        @foreach ($Posts as $post)
                            <tr>
                                <td>{{ $post->post_title }}</td>
                               
                                <td >{{ $post->created_at}}</td> 
                            </tr>
                        @endforeach
                    </tbody>
                </table>
@endsection

