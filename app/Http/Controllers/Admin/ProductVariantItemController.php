<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductVariant;
use App\Models\ProductVariantItem;
use Illuminate\Http\Request;

class ProductVariantItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index($product_id, $variation_id)
    {
        $product = Product::findOrFail($product_id);
        $variant = ProductVariant::findOrFail($variation_id);
        $variant_item = ProductVariantItem::where('product_variant_id', $variant->id)->get();
        return view('admin.product.variant-item.index', compact('product', 'variant', 'variant_item'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $product_id, string $variant_id)
    {
        $variant = ProductVariant::findOrFail($variant_id);
        $product = Product::findOrFail($product_id);
        return view('admin.product.variant-item.create', compact('variant', 'product'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'name' => ['required', 'max:200'],
            'price' => ['required', 'numeric'],
        ]);

        $variant_item = new ProductVariantItem();
        $variant_item->product_variant_id = $request->product_variant_id;
        $variant_item->name = $request->name;
        $variant_item->price = $request->price;
        $variant_item->is_default = $request->is_default;
        $variant_item->status = $request->status;
        $variant_item->save();

        return redirect()->route('admin.product.variant-item.index',
            ['product_id' => $request->product_id, 'variant_id' => $request->product_variant_id])
            ->with('success', 'Variant item has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $variantItemId)
    {
        $variant_item = ProductVariantItem::findOrFail($variantItemId);
        return view('admin.product.variant-item.edit', compact('variant_item'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $variantItemId)
    {
        $request->validate([
            'name' => ['required', 'max:200'],
            'price' => ['required', 'numeric'],
        ]);

        $variant_item = ProductVariantItem::findOrFail($variantItemId);
        $variant_item->name = $request->name;
        $variant_item->price = $request->price;
        $variant_item->is_default = $request->is_default;
        $variant_item->status = $request->status;
        $variant_item->save();

        // return redirect()->route('admin.product.variant-item.index',
        //     ['product_id' => $variant_item->productVariation->product_id,
        //     'variation_id' => $variant_item->product_variant_id])
        //     ->with('success', 'Variant item has been created successfully!');

        return redirect()->back()->with('success', 'Variant item has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $variantItemId)
    {
        $variant_item = ProductVariantItem::findOrFail($variantItemId);
        $variant_item->delete();

        return response(['status' => 'success', 'message' => 'Product Variant Item has been deleted.']);
    }

    public function changeStatus(Request $request)
    {
        $variant_item = ProductVariantItem::findOrFail($request->id);
        $variant_item->status = $request->status == true ? 1 : 0;
        $variant_item->save();

        return response(['message' => 'Variant Item status has been updated successfully!']);
    }
}
