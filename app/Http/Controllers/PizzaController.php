<?php

namespace App\Http\Controllers;

use App\Models\Pizza;
use Illuminate\Http\Request;

class PizzaController extends Controller
{
    public function index()
    {
        // $pizzas = Pizza::orderBy('name')->get();
        // $pizzas = Pizza::where('type', 'volcano')->get();
        // $pizzas = Pizza::latest()->get();
        $pizzas = Pizza::all();

        return response()->json($pizzas);
    }

    public function store(Request $request)
    {
        $res = Pizza::create($request->all());
        //return the one we created
        return response()->json($res);
    }

    public function show($id)
    {
        $pizza = Pizza::find($id);

        return response()->json($pizza);
    }

    public function destroy($id){
        $res = Pizza::destroy($id);
        // return 1 or 0, 1 = success, 0 = fail
        return response()->json($res);
    }
}
