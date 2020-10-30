<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    // public function __construct(){
    //     $this->middleware('auth');
    // }

    public function index() {
        // $pizzas = Pizza::all();
        // $pizzas = Pizza::orderBy('base', 'desc')->get();
        // $pizzas = Pizza::where('type', 'jelly')->get();
        $pizzas = Pizza::latest()->get();
        return view('pizzas.index',['pizzas' => $pizzas]);
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
        $pizza = new Pizza();
        $pizza->name = request('name');
        $pizza->type = request('type');
        $pizza->base = request('base');
        $pizza->toppings = request('toppings');
        $pizza->save();
        return redirect('/')->with('message', 'Thanks for your order!');
    }

    public function destroy($id) {
        $pizza = Pizza::findOrFail($id);
        $pizza->delete();
        return redirect('/pizzas');
    }
}
