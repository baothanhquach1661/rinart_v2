<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Services\OrderService;
use Illuminate\Http\Request;

class PaymentController extends Controller
{
    function index()
    {
        $subtotal = cartTotal();
        $delivery = session()->get('delivery_fee') ?? 0;
        $discount = session()->get('coupon')['discount'] ?? 0;
        $grandtotal = grandCartTotal($delivery);
        return view('frontend.pages.payment', compact(
            'subtotal',
            'delivery',
            'discount',
            'grandtotal'
        ));
    }

    function makePaypalPayment(Request $request, OrderService $orderService)
    {
        $request->validate([
            'paymentPaypal' => ['required', 'string', 'in:paypal']
        ]);

        /** Create Order **/
        if($orderService->createOrder()){
            // redirect user to payment host
            return true;
        }

    }
}
