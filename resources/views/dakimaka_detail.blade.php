@extends('layouts.app')

@section('content')

<div class="daks-detail">
    @foreach ($currentdask as $cd)
    <div class="daks-detail-container">
        <h1>{{$cd->title}}</h1>
        <h3>{{$cd->desx}}</h3>
        <p>{{$cd->price}}</p>
    </div>
    @endforeach
</div>

@endsection 