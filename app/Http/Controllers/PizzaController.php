<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        $pizzas = [
            ['type' => 'hawaiilan', 'base' => 'cheesy crust'],
            ['type' => 'hawaiilan', 'base' => 'cheesy crust'],
            ['type' => 'hawaiilan', 'base' => 'cheesy crust'],
        ];

        $name = request('name');
        $age = request('age');

        return view(
            'pizzas',
            [
                'pizzas' => $pizzas,
                'name' => $name,
                'age' => $age
            ]
        );
    }

    public function show($id)
    {
        return view('details', ['id' => $id]);
    }
}
