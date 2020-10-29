@extends('layouts.layout')
@section('content')
<h1>Pizzas - ID: {{ $pizza->id }}</h1>
<h2>Hi {{ $pizza->name }}, your order for {{ $pizza->base }} ~ {{ $pizza->type }} is being processed!</h2>
<p>WML with this Laravel OwO.</p>
<ul>
    @foreach ($pizza->toppings as $topping)
        <li>{{ $topping }}</li>
    @endforeach
</ul>
<a href="/pizzas" class="back"><<= Back to all pizzas</a>
@endsection
