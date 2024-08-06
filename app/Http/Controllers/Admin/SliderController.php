<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SliderRequest;
use App\Models\Slider;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sliders = Slider::all();
        return view('admin.slider.index', compact('sliders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.slider.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(SliderRequest $request)
    {
        $slider = new Slider();

        // Handle image file upload
        $imagePath = $this->uploadImage($request, 'image1', 'uploads/slider', $slider->image1);
        $slider->image1 = $imagePath;

        // Handle image file upload
        $imagePath2 = $this->uploadImage($request, 'image2', 'uploads/slider', $slider->image2);
        $slider->image2 = $imagePath2;

        $slider->name = $request->name;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->btn = $request->btn;
        $slider->btn_url = $request->btn_url;
        $slider->status = $request->status;
        $slider->save();

        return redirect()->route('admin.slider.index')->with('success', 'Data has been created successfully!');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $slider = Slider::findOrFail($id);
        return view('admin.slider.edit', compact('slider'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $slider = Slider::findOrFail($id);

        // Handle image file upload
        $imagePath = $this->updateImage($request, 'image1', 'uploads/slider', $slider->image1);
        $slider->image1 = empty(!$imagePath) ? $imagePath : $slider->image1;

        // Handle image file upload
        $imagePath2 = $this->updateImage($request, 'image2', 'uploads/slider', $slider->image2);
        $slider->image2 = empty(!$imagePath2) ? $imagePath2 : $slider->image2;

        $slider->name = $request->name;
        $slider->title = $request->title;
        $slider->description = $request->description;
        $slider->btn = $request->btn;
        $slider->btn_url = $request->btn_url;
        $slider->status = $request->status;
        $slider->save();

        return redirect()->back()->with('success', 'Data has been updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $slider = Slider::findOrFail($id);

        if($slider->image1){
            $this->deleteImage($slider->image1);
        }

        if($slider->image2){
            $this->deleteImage($slider->image2);
        }

        $slider->delete();

        return response(['status' => 'success', 'message' => 'Data has been deleted successfully!']);
    }
}
