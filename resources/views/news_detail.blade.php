@extends('layouts.app')

@section('content')
    <div class="news-detail">
        @foreach ($news_detail as $j)
        <h1>{{$j->title}}</h1>
        <h3>{{$j->desx}}</h3>
        <span>{{$j->date}}</span>
        @endforeach
        <h1 onclick="history.back()">НАЗАД</h1>
    </div>
@endsection