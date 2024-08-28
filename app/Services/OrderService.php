<?php

namespace App\Services;

use App\Models\Order;
use App\Models\OrderItem;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Facades\Log;

class OrderService
{
    /** Store Order in Database **/
    function createOrder()
    {
        try{
            $order = new Order();
            $order->invoice_id = generateInvoiceId();
            $order->user_id = auth()->user()->id;
            $order->address = session()->get('shipping_address');
            $order->discount = session()->has('coupon') ? session()->get('coupon')['discount'] : 0;
            $order->delivery_charge = session()->get('delivery_fee', 0); // Default to 0 if not set
            $order->subtotal = cartTotal();
            $order->grandtotal = grandCartTotal($order->delivery_charge);
            $order->product_qty = Cart::content()->count();
            $order->payment_method = NULL;
            $order->payment_status = 'pending';
            $order->payment_approve_date = NULL;
            $order->transaction_id = NULL;
            $order->coupon_info = session()->has('coupon') ? json_encode(session()->get('coupon')) : null;
            $order->currency_name = NULL;
            $order->order_status = 'pending';
            $order->delivery_area_id = session()->get('delivery_area_id');
            $order->save();

            foreach (Cart::content() as $cartItem) {
                $orderItem = new OrderItem();
                $orderItem->order_id = $order->id;
                $orderItem->product_id = $cartItem->id;
                $orderItem->product_name = $cartItem->name;
                $orderItem->product_price = $cartItem->price;
                $orderItem->quantity = $cartItem->qty;
                $orderItem->product_sku = $cartItem->sku;

                // Fetching product options from the options array
                $productOptions = $cartItem->options['product_option'];

                // Map the product options to a structure you want to save
                $productVariants = array_map(function($option) {
                    return [
                        'variant_name' => $option['name'],
                        'price' => $option['price'],
                    ];
                }, $productOptions);

                $orderItem->product_variants = json_encode($productVariants);
                $orderItem->save();
            }

            /** Putting the grand total to session **/
            session()->put('grandtotal', $order->grandtotal);

            /** Putting order id to session **/
            session()->put('order_id', $order->id);

            return true;
        }catch(\Exception $e){
            logger($e);
            return false;
        }




    }

    /** Clear Session Items **/
    function clearSession()
    {
        Cart::destroy();
        session()->forget('coupon');
        session()->forget('address');
        session()->forget('delivery_fee');
        session()->forget('delivery_area_id');
        session()->forget('order_id');
        session()->forget('grandtotal');
    }
}
