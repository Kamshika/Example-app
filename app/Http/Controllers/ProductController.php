<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $product = Product::all();
        $price_min = $request->price_min;
        $price_max = $request->price_max;

        if ($price_min != null && $price_max != null) {
            $price_min = (int) $price_min;
            $price_max = (int) $price_max;

            $product = Product::whereBetween('price', [$price_min, $price_max])->get();
        }

        return view('dashboard', compact('product'))
            ->with('price_min', $price_min)
            ->with('price_max', $price_max);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.productadd');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'price' => 'required',
        ]);
        // return $request->all();
        Product::create($request->all());
        return redirect()->route('dashboard')
            ->with('success', 'Product created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product, $id)
    {
        $product = Product::find($id);
        return view('product.show', compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Product $product, $id)
    {
        $product = Product::find($id);
        return view('product.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Product $product, $id)
    {
        $request->validate([
            'name' => 'required|max:255',
            'category' => 'required',
            'price' => 'required',
        ]);

        $product = Product::find($id);
        $product->update($request->all());
        return redirect()->route('dashboard')
            ->with('success', 'Product updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Product $product, $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect()->route('dashboard')
            ->with('delete', 'Product deleted successfully');
    }
}
