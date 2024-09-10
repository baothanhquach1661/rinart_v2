<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
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


    function blog()
    {
        $blogs = Blog::where('status', 1)->latest()->paginate(6);
        return view('frontend.blog.blog', compact('blogs'));
    }


    function blogDetails(String $slug)
    {
        $blog = Blog::where('slug', $slug)->where('status', 1)->firstOrFail();
        $blog_categories = BlogCategory::where('status', 1)
            ->where('id', '!=', $blog->blog_category_id)
            ->get();
        $recent_blogs = Blog::where('status', 1)
            ->where('id', '!=', $blog->id)
            ->latest()->take(3)
            ->get();
        return view('frontend.blog.blog-details', compact('blog', 'blog_categories', 'recent_blogs'));
    }
}
