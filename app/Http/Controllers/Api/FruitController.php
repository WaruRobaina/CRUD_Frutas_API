<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Fruit;
use Illuminate\Http\Request;

class FruitController extends Controller
{
    
    public function index()
    {
        $fruits = Fruit::all();
        return $fruits;
    }

    
    public function store(Request $request)
    {
        $fruit = new Fruit();
        $fruit->name = $request->name;
        $fruit->size = $request->size;
        if($fruit->validateSize($request->size) == false){
            return response()->json(['message' => 'size not allowed'], 400);
        }        
        $fruit->color = $request->color;

        $fruit->save();
    }

    
    public function show($id)
    {
        $fruit = Fruit::find($id);
        return $fruit;
    }

    
    public function update(Request $request)
    {
        $fruit = Fruit::findOrFail($request->id);
        $fruit->name = $request->name;
        $fruit->size = $request->size;
        if($fruit->validateSize($request->size) == false){
            return response()->json(['message' => 'size not allowed'], 400);
        }  
        $fruit->color = $request->color;

        $fruit->save();
        return $fruit;
    }

    
    public function destroy($id)
    {
        $product = Fruit::Destroy($id);
        return $product;
    }
}
