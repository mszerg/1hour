@extends('front.layouts.main')

@section('title')Главная Страница@endsection

@section('content')
    <h1>CFO</h1>
    @foreach($reviews as $el)
        <div class = "alert alert-warning">
            <h3>{{$el->id}}</h3>
            <b>{{$el->name}}</b>
        </div>
    @endforeach
@endsection

