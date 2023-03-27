@extends('layouts.app')

@section('content')


@foreach ($manga_detail as $o)
<div class="manga-container">
    <h1>{{$o->title}}</h1>
    <h1>{{$o->desx}}</h1>
    <h1>{{$o->price}}</h1>
</div>
@endforeach

@endsection