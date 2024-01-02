<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Transaction;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Http\Request;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $transactions = Transaction::all();
        return view('Backend.Dashboard.Transaction.index', compact("transactions"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $products = Product::all();
        return view('Backend.Dashboard.Transaction.create', compact('products'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'product_id' => 'required|numeric',
            'product_qty' => 'required|numeric',
        ]);

        $product = Product::find($request->product_id);
        $product_stock = $product->stock - $request->product_qty;
        $product->update([
            'stock' => $product_stock,
        ]);

        Transaction::create([
            'product_id' => $request->product_id,
            'name' => $product->name,
            'unit_price' => $product->price,
            'qty' => $request->product_qty,
            'total_price' => $product->price * $request->product_qty
        ]);

        Toastr::success('Sales Generated');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Transaction $transaction)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Transaction $transaction)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Transaction $transaction)
    {
        //
    }
}
