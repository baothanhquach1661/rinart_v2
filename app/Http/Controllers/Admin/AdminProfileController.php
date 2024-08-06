<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class AdminProfileController extends Controller
{
    function profile() : View
    {
        return view('admin.profile.index');
    }

    public function profileUpdate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::id()],
            'image' => ['image', 'max:10000']
        ]);

        // Retrieve the authenticated user
        $user = Auth::user();

        // Handle the image upload
        if ($request->hasFile('image')) {
            if (File::exists(public_path($user->image))) {
                File::delete(public_path($user->image));
            }
            $image = $request->file('image');
            $imageName = $image->getClientOriginalName();
            $image->move(public_path('uploads/profile'), $imageName);

            $path = "/uploads/profile/" . $imageName;
            $user->image = $path; // Only set the image path if an image is uploaded
        }

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        $user->save();

        return redirect()->back()->with('success', 'Updated Successfully!');
    }


    function passwordUpdate(Request $request)
    {
        $request->validate([
            'current_password' => ['required', 'current_password'],
            'password' => ['required', 'confirmed']
        ]);

        $request->user()->update([
            'password' => bcrypt($request->password),
        ]);

        return redirect()->back()->with('success', 'Password updated successfully!');
    }
}
