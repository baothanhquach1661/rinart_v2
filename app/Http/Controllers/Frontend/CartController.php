<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    function addToCart(Request $request)
    {
        $product = Product::with(['variants'])->findOrFail($request->product_id);

        // Validate the quantity
        if ($product->qty < $request->quantity) {
            throw ValidationException::withMessages(['This item only has '.$product->qty.' left, please choose a valid quantity!']);
        }

        try {
            // Get selected product variants
            $selectedVariantIds = $request->input('variant');
            $productVariants = $product->variants->whereIn('id', $selectedVariantIds);

            // Prepare options to be stored in the cart
            $options = [
                'product_option' => [],
                'product_info' => [
                    'image' => $product->thumb_image,
                    'slug' => $product->slug,
                ],
            ];

            foreach ($productVariants as $variantItem) {
                $options['product_option'][] = [
                    'id' => $variantItem->id,
                    'name' => $variantItem->name,
                    'price' => $variantItem->price,
                ];
            }

            // Add product to cart
            Cart::add([
                'id' => $product->id,
                'name' => $product->name,
                'qty' => $request->quantity,
                'price' => $product->discount_price > 0 ? $product->discount_price : $product->price,
                'weight' => 0,
                'options' => $options,
            ]);

            return response(['status' => 'success', 'message' => 'Product added to your cart!'], 200);

        } catch (\Exception $e) {
            logger($e->getMessage());
            return response(['status' => 'error', 'message' => 'Something went wrong. Please try again!'], 500);
        }
    }
}
