@extends('layouts.layout')
@section('content')
<h1>Pizzas</h1>
<p>WML with this Laravel OwO.</p>
@foreach($pizzas as $pizza)
<div>
    {{ $pizza->name }} - {{ $pizza->type }} - {{ $pizza->base }}
</div>
@endforeach
@endsection
