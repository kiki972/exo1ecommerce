<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    // Afficher une liste de produits
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }

    // Afficher le formulaire de création de produit
    public function create()
    {
        return view('products.create');
    }

    // Enregistrer un nouveau produit
    public function store(Request $request)
    {
        $product = new Product();
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products.index');
    }

    // Afficher un produit spécifique
    public function show(Product $product)
    {
        return view('products.show', compact('product'));
    }

    // Afficher le formulaire d'édition de produit
    public function edit(Product $product)
    {
        return view('products.edit', compact('product'));
    }

    // Mettre à jour un produit spécifique
    public function update(Request $request, Product $product)
    {
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->save();

        return redirect()->route('products.index');
    }

    // Supprimer un produit spécifique
    public function destroy(Product $product)
    {
        $product->delete();
        return redirect()->route('products.index');
    }
}
