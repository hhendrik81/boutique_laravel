<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function product()
    {
        return view('product-list');
    }

    public function productId($id)
    {
        return view('product-details')->with('numero',$id);
    }

    public function list()
    {
        $products = Product::all();
        return view('product-list', array('products' => $products));
    }


    public function show(Product $id)
    {
        
        
        
        
        return view('product-details')->with('numero',$id);
    }
}

