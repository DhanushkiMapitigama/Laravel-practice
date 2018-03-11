@extends('layout.app1')
@section('content')
    <div class="jumbotron">
        <h1>POSTS</h1>
        @if(count($posts) > 0 )
            <ul class="list-post">
                @foreach($posts as $post)
                    <li class="list-posts-item">
                    <h2><a href="/posts/{{$post->id}}">{{$post->title}}</a></h2>
                    <small>Created on {{$post->created_at}}</small>
                    </li>
                @endforeach
                {{$posts->links()}}
            </ul>
        @else
            <h2>No posts found!</h2>
        @endif
    </div>
@endsection