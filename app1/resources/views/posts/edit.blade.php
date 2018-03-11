@extends('layout.app1')
@section('content')
    <div class="jumbotron">
        <h2>Edit post..</h2>
        {!! Form::open(['action' => ['PostsController@update' , $post->id ], 'method' => 'POST']) !!}
            <div class='form-group'>
                {{Form::label('title','Title')}}
                {{Form::text( 'title', $post->title , ['class' => 'form-control' , 'placeholder' => 'enter the title here'])}}
            </div>
            {{--  <div class='form-group'>
                {{Form::label('body','Body')}}
                {{Form::textarea( 'body','', ['class' => 'form-control' , 'placeholder' => 'enter the description'])}}
            </div>  --}}
            <div class='form-group'>
                {{Form::label('body','Body')}}
                {{Form::textarea( 'body', $post->body , [ 'id'=>'article-ckeditor' ,'class' => 'form-control' , 'placeholder' => 'enter the description'])}}
            </div>
            {{Form::hidden('_method','PUT')}}
            {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection