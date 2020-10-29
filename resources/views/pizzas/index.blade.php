@extends('layouts.layout')
@section('content')
<h1>Pizzas</h1>
<p>WML with this Laravel OwO.</p>
@foreach($pizzas as $pizza)
<div>
  <a href="/pizzas/{{ $pizza->id }}">[{{ $pizza->id }}] {{ $pizza->name }}</a>
</div>
@endforeach
<a href="/pizzas/create">Create a pizza</a>
@endsection
