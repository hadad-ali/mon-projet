<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

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

    public function create()
    {
        return view('products.create');
    }

    public function store(Request $req)
    {
        // recuperer data form
        // dd($req->input("pp"));

        // creer un nouveau produit dans la BD
        Product::create([
            "title"=> $req->input("tt"),
            "price"=> $req->input("pp"),
        ]);
        
        return redirect('/products');
    }
}
