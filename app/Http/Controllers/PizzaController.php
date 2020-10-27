<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index() {
        // get data from DB
        $pizzas = [
            ['type' => 'Hawaiaan', 'base' => 'Cheese'],
            ['type' => 'American', 'base' => 'Creamy'],
            ['type' => 'Asian', 'base' => 'Meat']
        ];
        return view('pizzas', [
            'pizzas' => $pizzas,
            'name' => request('name'),
            'gender' => request('gender')
        ]);
    }

    public function show($id) {
        // use the $id variable to query the DB for a record
        return view('details', ['id' => $id]);
    }
}
