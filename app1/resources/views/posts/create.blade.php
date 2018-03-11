@extends('layout.app1')
@section('content')
    <div class="jumbotron">
        <h2>Create post..</h2>
        {!! Form::open(['action' => 'PostsController@store', 'method' => 'POST']) !!}
            <div class='form-group'>
                {{Form::label('title','Title')}}
                {{Form::text( 'title','', ['class' => 'form-control' , 'placeholder' => 'enter the title here'])}}
            </div>
            {{--  <div class='form-group'>
                {{Form::label('body','Body')}}
                {{Form::textarea( 'body','', ['class' => 'form-control' , 'placeholder' => 'enter the description'])}}
            </div>  --}}
            <div class='form-group'>
                {{Form::label('body','Body')}}
                {{Form::textarea( 'body','', [ 'id'=>'article-ckeditor' ,'class' => 'form-control' , 'placeholder' => 'enter the description'])}}
            </div>
            {{Form::submit('submit', ['class' => 'btn btn-primary'])}}
        {!! Form::close() !!}
    </div>
@endsection