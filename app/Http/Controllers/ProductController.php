<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function product()
    {
        return ('Liste des produits');
    }

    public function productId($id)
    {
        return ('Fiche du produit '.$id);
    }
}
