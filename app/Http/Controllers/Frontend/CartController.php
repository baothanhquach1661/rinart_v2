<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Coupon;
use App\Models\CouponUsage;
use App\Models\Product;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class CartController extends Controller
{
    function index()
    {
        return view('frontend.pages.cart');
    }


    function addToCart(Request $request)
    {
        $product = Product::with(['variants.variantItems'])->findOrFail($request->product_id);

        // Validate the quantity
        if ($product->qty < $request->quantity) {
            throw ValidationException::withMessages(['This item only has '.$product->qty.' left, please choose a valid quantity!']);
        }

        try {
            $options = [
                'product_option' => [],
                'product_info' => [
                    'image' => $product->thumb_image,
                    'slug' => $product->slug,
                ],
            ];

            // Get selected product variant items from both inputs
            $selectedVVariants = $request->input('v_variant', []); // default to an empty array if not present
            $selectedVariants = $request->input('variant', []); // default to an empty array if not present

            // Combine both arrays of variant items
            $allSelectedVariants = array_merge($selectedVVariants, $selectedVariants);

            // Process each selected variant item
            foreach ($allSelectedVariants as $variantId => $variantItemId) {
                $variantItem = \App\Models\ProductVariantItem::find($variantItemId);
                if ($variantItem) {
                    $options['product_option'][] = [
                        'id' => $variantItem->id,
                        'name' => $variantItem->name,
                        'price' => $variantItem->price,
                    ];
                }
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


    function clearCart()
    {
        Cart::destroy();

        return redirect()->route('cart.index')->with('success', 'Cart has been cleared!');
    }


    function cartQtyUpdate(Request $request)
    {
        try {
            $cart = Cart::update($request->rowId, $request->qty);

            // Recalculate the discount based on the new cart total
            $subtotal = cartTotal();
            $discount = 0;

            if (session()->has('coupon')) {
                $coupon = Coupon::where('code', session()->get('coupon')['code'])->first();

                if ($coupon) {
                    if ($coupon->discount_type === 'percentage') {
                        $discount = $subtotal * ($coupon->discount / 100);
                    } elseif ($coupon->discount_type === 'amount') {
                        $discount = $coupon->discount;
                    }
                }
            }

            $totalAmount = $subtotal - $discount;

            return response([
                'status' => 'success',
                'qty' => $cart->qty,
                'cart_total' => currencyPosition($subtotal),
                'grand_cart_total' => currencyPosition($totalAmount),
                'product_total' => productTotal($request->rowId),
                'discount' => currencyPosition($discount),
                'totalAmount' => currencyPosition($totalAmount)
            ], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['status' => 'error', 'message' => 'Something went wrong. Please try again!'], 500);
        }
    }

    function cartProductRemove($rowId)
    {
        try{
            Cart::remove($rowId);
            return response(['status' => 'success',
                'message' => 'Product has been removed to your cart!',
                'grand_cart_total' => currencyPosition(grandCartTotal()),
                'cart_total' => cartTotal()],
            200);
        }catch(\Exception $e){
            return response(['status' => 'error', 'message' => 'Something went wrong. Please try again!'], 500);
        }
    }


    function couponApply(Request $request)
    {
        $subtotal = $request->subtotal;
        $code = $request->code;

        // if (!Auth::check()) {
        //     return response(['message' => 'Please sign in to use the coupon code.'], 403);
        // }

        $coupon = Coupon::where('code', $code)->first();

        if(!$coupon){
            return response(['message' => 'Invalid Code. Please try again!'], 500);
        }
        if($coupon->quantity <= 0){
            return response(['message' => 'Coupon code has been fully redeemed.'], 422);
        }
        if($coupon->expire_date < now()){
            return response(['message' => 'Coupon code has expired.'], 422);
        }

        // Check if the customer has already used a coupon
        // $user = auth()->user();
        // $couponUsage = CouponUsage::where('user_id', $user->id)->where('coupon_id', $coupon->id)->first();
        // if ($couponUsage) {
        //     return response(['message' => 'You have already used this coupon code.'], 422);
        // }

        if($coupon->discount_type === 'percentage') {
            $discount =  $subtotal * ($coupon->discount / 100);
        }elseif($coupon->discount_type === 'amount') {
            $discount = $coupon->discount;
        }

        $totalAmount = $subtotal - $discount;

        // Record the coupon usage
        // CouponUsage::create([
        //     'user_id' => $user->id,
        //     'coupon_id' => $coupon->id,
        // ]);

        session()->put('coupon', ['code' => $code, 'discount' => $discount]);

        return response(['success'=> 'Áp dụng coupon thành công!',
            'discount' => currencyPosition($discount),
            'totalAmount' => currencyPosition($totalAmount)]);
    }


    function removeCoupon()
    {
        session()->forget('coupon');

        return redirect()->route('cart.index')->with('success', 'Coupon has been removed!');
    }

}
