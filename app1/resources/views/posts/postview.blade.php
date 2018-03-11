@extends('layout.app1')
@section('content')
    <div class="jumbotron">
          
        <h1>{{$post->title}}</h1>
        {{--  <p>{{$post->body}}</p>   this does not parse html  --}}
        <p>{!!$post->body!!}</p>
        <br> 
        <small>Created on {{$post->created_at}}</small> 
        <br><hr>
        <a href="/posts/{{$post->id}}/edit" class="btn btn-default">Edit post</a> 
        <a class="btn btn-default" href="/posts" role="button">Go back</a>     
    </div>
@endsection