<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\SubCategory;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.product.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::where('status', 1)->get();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(ProductRequest $request)
    {
        $product = new Product();

        // Handle image file upload
        $imagePath = $this->uploadImage($request, 'thumb_image', 'uploads/product');
        $product->thumb_image = $imagePath;

        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->name = $request->name;
        $product->origin = $request->origin;
        $product->sku = $request->sku;
        $product->slug = Str::slug($request->name);
        $product->qty = $request->qty;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->video_link = $request->video_link;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->offer_start_date = $request->offer_start_date;
        $product->offer_end_date = $request->offer_end_date;

        $product->is_best_deal = $request->has('is_best_deal');
        $product->is_best_seller = $request->has('is_best_seller');
        $product->is_featured = $request->has('is_featured');
        $product->is_event = $request->has('is_event');
        $product->is_approved = 1;

        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;

        $product->status = $request->status;

        $product->save();

        return redirect()->route('admin.product.index')->with('success', 'Product has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Product::findOrFail($id);
        $categories = Category::where('status', 1)->get();
        $subcategories = SubCategory::where('category_id', $product->category_id)->get();
        return view('admin.product.edit', compact('product', 'categories',
            'subcategories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Product::findOrFail($id);

        // Handle image file upload
        $imagePath = $this->updateImage($request, 'thumb_image', 'uploads/products', $product->thumb_image);
        $product->thumb_image = empty(!$imagePath) ? $imagePath : $product->thumb_image;

        $product->category_id = $request->category_id;
        $product->subcategory_id = $request->subcategory_id;
        $product->name = $request->name;
        $product->origin = $request->origin;
        $product->sku = $request->sku;
        $product->slug = Str::slug($request->name);
        $product->qty = $request->qty;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->video_link = $request->video_link;
        $product->price = $request->price;
        $product->discount_price = $request->discount_price;
        $product->offer_start_date = $request->offer_start_date;
        $product->offer_end_date = $request->offer_end_date;

        $product->is_best_deal = $request->has('is_best_deal');
        $product->is_best_seller = $request->has('is_best_seller');
        $product->is_featured = $request->has('is_featured');
        $product->is_event = $request->has('is_event');

        $product->seo_title = $request->seo_title;
        $product->seo_description = $request->seo_description;

        $product->status = $request->status;

        $product->save();

        return redirect()->back()->with('success', 'Product has been Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::findOrFail($id);

        if ($product->thumb_image) {
            $this->deleteImage($product->thumb_image);
        }

        $product->delete();

        return response(['status' => 'success', 'message' => 'Product has been deleted.']);
    }

    public function getSubCategories(Request $request)
    {
        $subCategories = SubCategory::where('category_id', $request->id)->get();
        return $subCategories;
    }
}
