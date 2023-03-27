@extends('layouts.app')

@section('content')

<div class="manga">
    @foreach ($manga as $m) 
    <div class="manga-containr" onclick="window.location = 'manga_detail/{{$m->id}}'">
        <h1>{{$m->title}}</h1>
        <span>{{$m->price}}</span>
    </div>
    @endforeach
</div>

@endsection