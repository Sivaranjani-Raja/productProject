<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return response()->json(['Products'=>$products],200);
    }
    public function store(Request $request){

        $request->validate([
            'name' => 'required|max:191',
            'price' => 'required|max:191',
            'quantity' => 'required|max:191'
        ]);

        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->save();

        return response()->json(['message' => 'Product Added Successfully'],200);

    }
}
