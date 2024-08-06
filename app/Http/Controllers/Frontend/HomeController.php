<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Cta;
use App\Models\Product;
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
        $test_product = Product::where(['status' => 1, 'is_event' => 1])->get();
        return view('frontend.home.index',
            compact(
                'sliders',
                'cta',
                'categories',
                'test_product'
            ));
    }

    function showProduct(string $slug)
    {
        $categories = Category::where(['status' => 1, 'show_at_home' => 1])->get();
        $product = Product::with(['productGallery', 'variants', 'category'])->where('slug', $slug)->firstOrFail();
        return view('frontend.pages.product-detail', compact('categories', 'product'));
    }
}
