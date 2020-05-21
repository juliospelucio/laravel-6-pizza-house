@extends('layouts.layout')
@section('content')

<div class="wrapper pizza-index">
    @foreach($pizzas as $pizza)
    <div class="pizza-item">
        <img src="/img/pizza.png" alt="pizza icon">
        <a href="/pizzas/{{$pizza->id}}">{{$pizza->name}}</a>
    </div>
    @endforeach
</div>
@endsection