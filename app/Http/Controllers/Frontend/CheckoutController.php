<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Address;
use App\Models\Delivery;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
    function index()
    {
        $delivery_areas = Delivery::where('status', 1)->get();
        $shipping_address = Address::where(['user_id' => auth()->user()->id])->first();

        // Calculate the delivery fee
        $delivery_fee = $shipping_address->deliveryArea->delivery_fee ?? 0;

        // Calculate cart total with delivery fee and discount if applicable
        $cartTotal = cartTotal();
        $discount = session()->get('coupon')['discount'] ?? 0;
        $checkoutGrandTotal = $cartTotal + $delivery_fee - $discount;

        return view('frontend.pages.checkout', compact('shipping_address', 'delivery_areas', 'checkoutGrandTotal'));
    }


    function removeCoupon()
    {
        session()->forget('coupon');

        return redirect()->back()->with('success', 'Coupon has been removed!');
    }

    function checkoutToPayment(Request $request)
    {
        $request->validate([
            'id' => ['required', 'integer']
        ]);

        $address = Address::with('deliveryArea')->findOrFail($request->id);
        $selectedAddress = $address->address.', Khu Vực: '.$address->deliveryArea?->area_name;

        session()->put('shipping_address', $selectedAddress);
        session()->put('delivery_fee', $address->deliveryArea?->delivery_fee);

        return response(['redirect_url' => route('payment.index')]);
    }
}
