<?php

use Gloudemans\Shoppingcart\Facades\Cart;

if (!function_exists('currencyPosition')) {
    function currencyPosition($price) {
        // Ensure the price is numeric
        if (!is_numeric($price)) {
            $price = 0; // or handle the error as needed
        }

        // Format the price first
        $formattedPrice = number_format((float)$price, 0, '.', '.');

        // Check currency position and return formatted price with currency symbol
        if (config('settings.site_currency_position') === 'left') {
            return config('settings.site_currency_icon') . $formattedPrice;
        } else {
            return $formattedPrice . config('settings.site_currency_icon');
        }
    }
}

if(!function_exists('cartTotal')){
    function cartTotal(){
        $total = 0;

        foreach(Cart::content() as $item){
            $productPrice = $item->price;
            $variantItemPrice = 0;

            // Check if product_options exists and is an array
            if (isset($item->options['product_option']) && is_array($item->options['product_option'])) {
                foreach ($item->options['product_option'] as $option) {
                    $variantItemPrice += $option['price'];
                }
            }

            $total += ($productPrice + $variantItemPrice) * $item->qty;
        }

        return $total;
    }
}

/* Calculate Product Total Price */
if(!function_exists('productTotal')){
    function productTotal($rowId){
        $total = 0;

        $product = Cart::get($rowId);
        $productPrice = $product->price;
        $variantItemPrice = 0;

        // Check if product_options exists and is an array
        if (isset($product->options['product_option']) && is_array($product->options['product_option'])) {
            foreach ($product->options['product_option'] as $option) {
                $variantItemPrice += $option['price'];
            }
        }

        $total += ($productPrice + $variantItemPrice) * $product->qty;

        return currencyPosition($total);
    }
}


/* Calculate Grand Total Price */
if(!function_exists('grandCartTotal')){
    function grandCartTotal(){
        $cartTotal = cartTotal();
        $total = 0;
        if(session()->has('coupon')){
            $discount = session()->get('coupon')['discount'];
            $total = $cartTotal - $discount;

            return $total;
        }else{
            $total = $cartTotal;
            return $total;
        }
    }
}


/* Generate invoice_id */
if(!function_exists('generateInvoiceId')){
    function generateInvoiceId(){
        $randomNumber = rand(1, 999999);
        $currentDateTime = now();

        $invoiceId = $randomNumber.$currentDateTime->format('ymd').$currentDateTime->format('s');

        return $invoiceId;
    }
}

