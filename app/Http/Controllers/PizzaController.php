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
        $pizzas = Pizza::latest()->get();
        return view('pizzas.index', [
            'pizzas' => $pizzas,
        ]);
    }

    public function show($id) {
        // use the $id variable to query the DB for a record
        return view('pizzas.show', ['id' => $id]);
    }

    public function create() {
        // use the $id variable to query the DB for a record
        return view('pizzas.create');
    }
}
