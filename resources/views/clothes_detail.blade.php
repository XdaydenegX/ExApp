@extends('layouts.app')

@section('content')

<div class="current-clothes">
    @foreach ($currentclothes as $j)
    <div class="clothes-container">
        <h1>{{$j->title}}</h1>
        <h3>{{$j->desx}}</h3>
        <p>{{$j->price}}</p>
    </div>
    @endforeach
</div>

@endsection