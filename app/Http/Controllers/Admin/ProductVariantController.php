<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductVariantController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $product = Product::findOrFail($request->product);
        $variants = ProductVariant::where('product_id', $product->id)->get();
        return view('admin.product.variant.index', compact('product', 'variants'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.product.variant.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => ['integer', 'required'],
            'name' => ['required', 'max:300']
        ]);

        $variation = new ProductVariant();
        $variation->product_id = $request->product_id;
        $variation->name = $request->name;
        $variation->slug = Str::slug($request->name);
        $variation->status = $request->status;

        $variation->save();

        return redirect()->route('admin.product-variant.index', ['product' => $request->product_id])
            ->with('success', 'Product Variant has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $variant = ProductVariant::findOrFail($id);
        return view('admin.product.variant.edit', compact('variant'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:300'],
            'status' => ['required']
        ]);

        $variant = ProductVariant::findOrFail($id);
        $variant->name = $request->name;
        $variant->slug = Str::slug($request->name);
        $variant->status = $request->status;

        $variant->save();

        return redirect()->route('admin.product-variant.index', ['product' => $variant->product_id])
            ->with('success', 'Variant has been Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $variation = ProductVariant::findOrFail($id);

        $variation->delete();

        return response(['status' => 'success', 'message' => 'Product Variant has been deleted.']);
    }
}
