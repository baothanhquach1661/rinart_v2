<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cta;
use App\Models\Product;
use App\Models\Services;
use App\Models\Slider;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index() : View
    {
        $sliders = Slider::where('status', 1)->get();
        $cta = Cta::first();
        $categories = Category::where(['status' => 1, 'show_at_home' => 1])->get();
        $services = Services::orderBy('index')->take(6)->get();
        return view('frontend.home.index',
            compact(
                'sliders',
                'cta',
                'categories',
                'services'
            ));
    }


    function showProduct(string $slug)
    {
        $product = Product::with(['productGallery', 'variants', 'category'])->where('slug', $slug)->firstOrFail();
        $relatedProducts = Product::where('category_id', $product->category_id)
                            ->where('id', '!=', $product->id)->take(8)->latest()->get();
        return view('frontend.pages.product-detail', compact('product', 'relatedProducts'));
    }


    function loadProductModal($productId)
    {
        $product = Product::with(['variants'])->findOrFail($productId);

        return view('frontend.layouts.ajax-files.product-popup-modal', compact('product'))->render();
    }
}
