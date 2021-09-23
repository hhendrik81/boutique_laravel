<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function productList()
    {
        $products = Product::all();
        return view('product-list', ['products' => $products]);
    }

    public function getByName()
    {
        $products = Product::orderBy('Nom')->get();
        return view('product-list', ['products' => $products]);
    }

    public function getByPrice()
    {
        $products = Product::orderBy('Prix')->get();
        return view('product-list', ['products' => $products]);
    }


    public function productId($id)
    {
        $product = Product::where('id', $id)->first();
        return view('product-details', ['product' => $product]);
    }


}

