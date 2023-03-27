@extends('layouts.app')

@section('content')

<div class="clothes">
    @foreach ($clothes as $i)
    <div class="clothes-container" onclick="window.location = 'clothes_detail/{{$i->id}}'">
        <h1>{{$i->title}}</h1>
        <p>{{$i->price}}</p>
    </div>
    @endforeach
</div>

@endsection