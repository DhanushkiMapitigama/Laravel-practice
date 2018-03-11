@extends('layout.app1')
@section('content')
    <h1>{{$title}}</h1>
    <p>This is About page </p>
    @if(count($services) > 0 )
        <ul class="list-group">
        @foreach($services as $service)
            <li class="list-group-item">{{$service}}</li>
        @endforeach
        </ul>
    @endif
@endsection