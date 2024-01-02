<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('Backend.Dashboard.Product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Backend.Dashboard.Product.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|string|unique:products',
            'price' => 'required|numeric',
            'stock' => 'required|numeric'
        ]);
        Product::create([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock,
        ]);
        Toastr::success('Added a New Product');
        return redirect()->route('admin.products.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        return view('Backend.Dashboard.Product.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product)
    {
        return view('Backend.Dashboard.Product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product)
    {

        $this->validate($request, [
            'name' => 'required|string|unique:products,name,' . $product->id,
            'price' => 'required|numeric',
            'stock' => 'nullable|numeric'
        ]);

        $old_quantity = $product->stock;

        $product->update([
            'name' => $request->name,
            'price' => $request->price,
            'stock' => $request->stock + $old_quantity,
        ]);

        Toastr::success('Update Product Info');
        return redirect()->route('admin.products.index');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product)
    {
        $product->delete();
        Toastr::success('Deleted');
        return redirect()->route('admin.products.index');
    }
}
