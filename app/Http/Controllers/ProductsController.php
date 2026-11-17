<?php

namespace App\Http\Controllers;

use App\Models\Product;

class ProductsController extends Controller
{
    public function afficherList()
    {
        // recuperer data
        $prods = Product::all();

        // envoyer data à la vue
        return view('products.list',
            compact('prods'));
    }

    public function afficherDetail($id)
    {
        $p = Product::findOrFail($id);

        return view('products.detail', compact('p'));
    }
}
