@extends('layouts.app')

@section('content')

<div class="students">
    @foreach($students as $s)
    <div class="news-container">
        <h1>
            Имя: {{$s->first_name}}
            Фамилия: {{$s->last_name}}
        </h1>
        <h3>Хуйня в которой вы учитесь: {{$s->grop_fak}}</h3>
        <p>Выживание или хардкор: {{$s->status}}</p>
        <h3>Ключ-пропуска: {{$s->passkey->passkey}}</h3>
    </div>
    @endforeach
</div>

@endsection