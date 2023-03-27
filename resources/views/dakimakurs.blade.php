@extends('layouts.app')

@section('content')

<div class="daks">
    @foreach ($daks as $d)
    <div class="daks-container">
        <h1 onclick='window.location = "dakimaka_detail/{{$d->id}}"'>{{$d->title}}</h1>
        <h3>{{$d->price}}</h3>
    </div>
    @endforeach
</div>

@endsection