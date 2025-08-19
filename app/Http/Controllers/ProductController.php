<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    /**
     * Display the initial view with two buttons.
     */
    public function index()
    {
        return view('products.index');
    }

    /**
     * Show the form for creating a new product.
     */
    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created product in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0|max:999999.99',
            'stock' => 'required|integer|min:0',
            'category' => 'required|string|max:255',
            'customizable' => 'boolean',
            'imageUrl' => 'nullable|string|max:500',
        ]);

        Product::create($request->all());

        return redirect()->route('products.index')
            ->with('success', 'Elemento creado satisfactoriamente');
    }

    /**
     * Display a listing of all products.
     */
    public function list()
    {
        $products = Product::select('id', 'name')->get();
        return view('products.list', compact('products'));
    }

    /**
     * Display the specified product.
     */
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }

    /**
     * Remove the specified product from storage.
     */
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();

        return redirect()->route('products.list')
            ->with('success', 'Producto eliminado correctamente');
    }
}
