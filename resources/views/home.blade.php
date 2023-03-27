@extends('layouts.app')

@section('content')
<div class="select-category-container">
    <button onclick="ChangeCategory(0)">Все категории</button>
    @foreach($categories as $c)
    <button onclick="ChangeCategory({{$c->id}})">{{$c->title}}</button>
    @endforeach
</div>
<div class="news">
    @foreach ($news as $i)
    <div class="news-container"  onclick="window.location = 'news_detail/{{$i->id}}'">
        <h1>{{$i->title}}</h1>
        <span>{{$i->date}}</span>
        <br>
        <h3 id="news-category">
        @foreach($i->category as $c)
        {{$c->title}} 
        @endforeach
        </h3>
    </div>
    @endforeach
</div>
@endsection
