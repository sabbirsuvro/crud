<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Product::orderBy('created_at','DESC')->get();
        return view('product.index', compact('product'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('product.create');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       Product::create($request->all());
       return redirect()->route('product.index')->with('success', 'Product added successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product =Product::findOrfail($id);
        return view('product.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product =Product::findOrfail($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product =Product::findOrfail($id);
        $product->update($request->all());

        return redirect()->route('product.index')-> with('success', 'Product update successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product =Product::findOrfail($id);
        $product->delete();
        return redirect()->route('product.index')-> with('success', 'Product delete successfully');

    }
}
