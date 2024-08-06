<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CtaRequest;
use App\Models\Cta;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class CtaController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cta = Cta::first();
        return view('admin.cta.index', compact('cta'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CtaRequest $request, string $id)
    {
        $cta = Cta::findOrFail($id);

        // Handle image file upload
        $imagePath = $this->updateImage($request, 'image', 'uploads/cta', $cta->image);
        $cta->image = empty(!$imagePath) ? $imagePath : $cta->image;

        $cta->name = $request->name;
        $cta->title = $request->title;
        $cta->description = $request->description;
        $cta->btn = $request->btn;
        $cta->btn_url = $request->btn_url;
        $cta->video_url = $request->video_url;
        $cta->save();

        return redirect()->back()->with('success', 'CTA Section data has been updated successfully!');
    }
}
