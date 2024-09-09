<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Services;
use App\Traits\ImageUploadTrait;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ServicesController extends Controller
{
    use ImageUploadTrait;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $services = Services::all();
        return view('admin.service.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.service.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'main_image' => ['required', 'image'],
            'image_1' => ['required', 'image'],
            'image_2' => ['required', 'image']
        ]);

        $service = new Services();

        // Handle image file upload
        $imagePath = $this->uploadImage($request, 'main_image', 'uploads/services', $service->main_image);
        $service->main_image = $imagePath;

        $imagePath2 = $this->uploadImage($request, 'image_1', 'uploads/services', $service->image_1);
        $service->image_1 = $imagePath2;

        $imagePath3 = $this->uploadImage($request, 'image_2', 'uploads/services', $service->image_2);
        $service->image_2 = $imagePath3;

        $service->index = $request->index;
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->title_1 = $request->title_1;
        $service->title_2 = $request->title_2;
        $service->title_3 = $request->title_3;
        $service->description_1 = $request->description_1;
        $service->description_2 = $request->description_2;
        $service->description_3 = $request->description_3;
        $service->status = $request->status;
        $service->save();

        return redirect()->route('admin.service.index')->with('success', 'Data has been created successfully!');
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
        $service = Services::findOrFail($id);
        return view('admin.service.edit', compact('service'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $service = Services::findOrFail($id);

        // Handle image file upload
        $imagePath = $this->updateImage($request, 'main_image', 'uploads/services', $service->main_image);
        $service->main_image = empty(!$imagePath) ? $imagePath : $service->main_image;

        $imagePath2 = $this->updateImage($request, 'image_1', 'uploads/services', $service->image_1);
        $service->image_1 = empty(!$imagePath2) ? $imagePath2 : $service->image_1;

        $imagePath3 = $this->updateImage($request, 'image_2', 'uploads/services', $service->image_2);
        $service->image_2 = empty(!$imagePath3) ? $imagePath3 : $service->image_2;

        $service->index = $request->index;
        $service->title = $request->title;
        $service->slug = Str::slug($request->title);
        $service->description = $request->description;
        $service->title_1 = $request->title_1;
        $service->title_2 = $request->title_2;
        $service->title_3 = $request->title_3;
        $service->description_1 = $request->description_1;
        $service->description_2 = $request->description_2;
        $service->description_3 = $request->description_3;
        $service->status = $request->status;
        $service->save();

        return redirect()->route('admin.service.index')->with('success', 'Data has been Updated successfully!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $service = Services::findOrFail($id);

        if($service->main_image){
            $this->deleteImage($service->main_image);
        }
        if($service->image_1){
            $this->deleteImage($service->image_1);
        }
        if($service->image_2){
            $this->deleteImage($service->image_2);
        }

        $service->delete();

        return response(['status' => 'success', 'message' => 'Data has been deleted successfully!']);
    }
}
