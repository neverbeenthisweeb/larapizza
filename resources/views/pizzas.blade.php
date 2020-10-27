@extends('layouts.layout')
@section('content')
<h1>Pizzas</h1>
<p>Hi {{ $name }} ({{ $gender  }}), welcome to Larapizza!</p>
<p>WML with this Laravel OwO.</p>
@foreach($pizzas as $pizza)
<div>
    {{ $loop->index }} {{ $pizza['type'] }} - {{ $pizza['base'] }}
    @if($loop->first)
        <span>- First in the loop!</span>
    @endif
    @if($loop->last)
        <span>- Last in the loop!</span>
    @endif
</div>
@endforeach
@endsection
