@extends('layouts.app')

@section('content')

<div class="sections-container">
    <button id="1" onclick="window.location = 'sections/clothes'">Одежда</button>
    <button id="2" onclick="window.location = 'sections/dakimakurs'">Дакимакуры</button>
    <button id="3" onclick="window.location = 'sections/manga'">Манга</button>
</div>

@endsection