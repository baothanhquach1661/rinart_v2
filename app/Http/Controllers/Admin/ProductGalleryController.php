<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class ProductGalleryController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index(string $product_id)
    {
        $images = ProductGallery::where('product_id', $product_id)->get();
        $product = Product::findOrFail($product_id);
        return view('admin.product.gallery.index', compact('images', 'product'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'gallery_image' => ['required', 'image', 'max:30000'],
            'product_id' => ['required', 'integer']
        ]);

        $imagePath = $this->uploadImage($request, 'gallery_image', 'uploads/product_gallery');
        $gallery = new ProductGallery();
        $gallery->product_id = $request->product_id;
        $gallery->gallery_image = $imagePath;
        $gallery->save();

        return redirect()->back()->with('success', 'Product Gallery has been Created successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        try
        {
            $gallery = ProductGallery::findOrFail($id);
            $this->deleteImage($gallery->gallery_image);
            $gallery->delete();

            return response(['status' => 'success', 'message' => 'Your gallery image has been deleted successfully!']);
        }
        catch( \Exception $e){
            return response(['status' => 'error', 'message' => 'Something Wrong here. Please try again!']);
        }
    }
}
