<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\BlogCategory;
use App\Models\BlogComment;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $b_categories = BlogCategory::where('status', 1)->get();
        return view('admin.blog.create', compact('b_categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'title' => ['required', 'max:100'],
            'image' => ['required'],
            'blog_category_id' => ['required']
        ]);

        $blog = new Blog();

        // Handle image file upload
        $imagePath = $this->uploadImage($request, 'image', 'uploads/blog', $blog->image);
        $blog->image = $imagePath;

        $imagePath2 = $this->uploadImage($request, 'banner', 'uploads/blog', $blog->banner);
        $blog->banner = $imagePath2;

        $blog->user_id = auth()->user()->id;
        $blog->blog_category_id = $request->blog_category_id;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->short_description = $request->short_description;
        $blog->long_description = $request->long_description;
        $blog->seo_title = $request->seo_title;
        $blog->seo_description = $request->seo_description;
        $blog->status = $request->status;
        $blog->save();

        return redirect()->route('admin.blog.index')->with('success', 'Data has been created successfully!');
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
        $blog = Blog::findOrFail($id);
        $b_categories = BlogCategory::where('status', 1)->get();
        return view('admin.blog.edit', compact('blog', 'b_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $blog = Blog::findOrFail($id);

        // Handle image file upload
        $imagePath = $this->updateImage($request, 'image', 'uploads/blog', $blog->image);
        $blog->image = empty(!$imagePath) ? $imagePath : $blog->image;

        $imagePath2 = $this->updateImage($request, 'banner', 'uploads/blog', $blog->banner);
        $blog->banner = empty(!$imagePath2) ? $imagePath2 : $blog->banner;

        $blog->user_id = auth()->user()->id;
        $blog->blog_category_id = $request->blog_category_id;
        $blog->title = $request->title;
        $blog->slug = Str::slug($request->title);
        $blog->short_description = $request->short_description;
        $blog->long_description = $request->long_description;
        $blog->seo_title = $request->seo_title;
        $blog->seo_description = $request->seo_description;
        $blog->status = $request->status;
        $blog->save();

        return redirect()->route('admin.blog.index')->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::findOrFail($id);

        if($blog->image){
            $this->deleteImage($blog->image);
        }
        if($blog->banner){
            $this->deleteImage($blog->banner);
        }

        $blog->delete();

        return response(['status' => 'success', 'message' => 'Data has been deleted successfully!']);
    }


    function blogComments()
    {
        $comments = BlogComment::all();
        return view('admin.blog.blog-comment.index', compact('comments'));
    }


    function blogCommentStatusUpdate(string $id)
    {
        $comment = BlogComment::find($id);
        $comment->status = !$comment->status;
        $comment->save();

        return redirect()->back()->with('success', 'Data has been updated successfully!');
    }


    function blogCommentDestroy(string $id)
    {
        $comment = BlogComment::findOrFail($id);
        $comment->delete();

        return response(['status' => 'success', 'message' => 'Data has been deleted successfully!']);
    }
}
