<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BlogCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog_categories = BlogCategory::all();
        return view('admin.blog.blog-category.index', compact('blog_categories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.blog-category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => ['required', 'max:100', 'unique:blog_categories,name']
        ]);

        $blog_category = new BlogCategory();

        $blog_category->name = $request->name;
        $blog_category->slug = Str::slug($request->name);
        $blog_category->status = $request->status;
        $blog_category->save();

        return redirect()->route('admin.blog-category.index')->with('success', 'Blog Category has been created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $b_category = BlogCategory::FindOrFail($id);
        return view('admin.blog.blog-category.edit', compact('b_category'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'name' => ['required', 'max:100', 'unique:blog_categories,name,'.$id],
        ]);

        $b_category = BlogCategory::findOrFail($id);

        $b_category->name = $request->name;
        $b_category->slug = Str::slug($request->name);
        $b_category->status = $request->status;
        $b_category->update();

        return redirect()->back()->with('success', 'Blog Category has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $b_category = BlogCategory::findOrFail($id);
        $b_category->delete();

        return response(['status' => 'success', 'message' => 'Your Blog Category has been deleted successfully!']);
    }
}
