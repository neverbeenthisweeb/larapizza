@extends('layouts.layout')
@section('content')
<h1>Pizzas</h1>
<p>WML with this Laravel OwO.</p>
<h2>Create a new pizza!</h2>
<form action="/pizzas" method="POST">
    @csrf
    <label for="name">Your name:</label>
    <input type="text" id="name" name="name">
    <label for="type">Choose pizza type:</label>
    <select name="type" id="type">
        <option value="margarita">Margarita</option>
        <option value="hawaiian">Hawaiian</option>
    </select>
    <label for="base">Choose pizza base:</label>
    <select name="base" id="base">
        <option value="cheesy">Cheesy</option>
        <option value="rust">Rust</option>
    </select>
    <fieldset>
        <label>Extra toppings:</label>
        <input type="checkbox" name="toppings[]" value="mushroom">Mushroom<br />
        <input type="checkbox" name="toppings[]" value="oreo">Oreo<br />
        <input type="checkbox" name="toppings[]" value="cheese">Cheese<br />
    </fieldset>
    <input type="submit" value="Order Pizza">
</form>
@endsection
