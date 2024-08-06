<?php

namespace App\Traits;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

trait ImageUploadTrait {

    function uploadImage(Request $request, $inputName, $path = "/uploads")
    {
        // Handle the image upload
        if ($request->hasFile($inputName)) {

            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = $imageName =  'media_'.uniqid().'.'.$ext;

            $image->move(public_path($path), $imageName);

            return $path.'/'.$imageName;
        }
    }


    function updateImage(Request $request, $inputName, $path = "/uploads", $oldPath=null)
    {
        if ($request->hasFile($inputName)) {

            if (File::exists(public_path($oldPath))) {
                File::delete(public_path($oldPath));
            }

            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = $imageName =  'media_'.uniqid().'.'.$ext;

            $image->move(public_path($path), $imageName);

            return $path.'/'.$imageName;
        }
    }

    function uploadMultiImage(Request $request, $inputName, $path = "/uploads")
    {
        $imagepaths = [];
        // Handle the image upload
        if ($request->hasFile($inputName)) {

            $images = $request->{$inputName};

            foreach($images as $image)
            {
                $imageName = $image->getClientOriginalName();
                $image->move(public_path($path), $imageName);

                $imagepaths[] =  $path.'/'.$imageName;
            }

            return $imagepaths;
        }
    }

    function deleteImage(string $path)
    {
        if (File::exists(public_path($path))) {
            File::delete(public_path($path));
        }
    }
}
