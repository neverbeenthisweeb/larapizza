<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('base', 'desc')->get();
        // $pizzas = Pizza::where('type', 'jelly')->get();
        // $pizzas = Pizza::latest()->get();
        return view('pizzas.index');
    }

    public function show($id) {
        // use the $id variable to query the DB for a record
        $pizza = Pizza::findOrFail($id);
        return view('pizzas.show', ['pizza' => $pizza]);
    }

    public function create() {
        // use the $id variable to query the DB for a record
        return view('pizzas.create');
    }

    public function store() {
        error_log(request('name'));
        error_log(request('type'));
        error_log(request('base'));
        return redirect('/');
    }
}
