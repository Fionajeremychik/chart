<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    //
    public function index(){
        $products = Product::orderBy('year', 'ASC')->get();
        return response()->json($products);
    }

    public function store(Request $request){
        $product = new Product();
        $product->name = $request->name;
        $product->year = $request->year;
        $product->price = $request->price;
        dump($product);
        $product->save();
        return response()->json(['success'=>'The product was created succesfully']);
    }
}
