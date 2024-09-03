<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Delivery;
use App\Models\Order;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;

class UserProfileController extends Controller
{
    function dashboard() : View
    {
        $delivery_areas = Delivery::where('status', 1)->get();
        $user_shipping_address = Address::where('user_id', Auth::user()->id)->first();
        $orders = Order::where('user_id', auth()->user()->id)->get();
        return view('frontend.dashboard.index', compact('delivery_areas', 'user_shipping_address', 'orders'));
    }

    function userProfileUpdate(Request $request)
    {
        // Validate the request data
        $request->validate([
            'name' => ['required', 'max:100'],
            'email' => ['required', 'email', 'unique:users,email,' . Auth::user()->id],
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

        // Update the user's name and email
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->phone = $request->input('phone');

        // Save the user's updated information
        $user->save();

        // Redirect back with a success message
        return redirect()->back()->with('success', 'Profile has been updated successfully!');
    }


    function userPasswordUpdate(Request $request)
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


    function userShippingAddressUpdate(Request $request)
    {
        $validateData = $request->validate([
            'delivery_area' => ['required', 'integer'],
            'full_name' => ['required', 'string'],
            'email' => ['required', 'email'],
            'phone' => ['required', 'string'],
            'address' => ['required', 'string'],
        ]);

        Address::updateOrCreate(
            ['user_id' => auth()->user()->id],
            [
                'delivery_area_id' => $request->delivery_area,
                'full_name' => $request->full_name,
                'email' => $request->email,
                'phone' => $request->phone,
                'address' => $request->address,
            ]
        );

        return redirect()->back()->with('success', 'Profile has been updated successfully!');
    }

    /* show order detail in user dashboard */
    public function showOrderDetails($invoiceId)
    {
        // Find the order by invoice_id instead of id
        $order = Order::with('orderItems.product')->where('invoice_id', $invoiceId)->firstOrFail();

        return view('frontend.dashboard.section.order-details', compact('order'));
    }

}
