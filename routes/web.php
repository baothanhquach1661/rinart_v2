<?php

use App\Events\RTOderPlacedNotificationEvent;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\PaymentController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\CheckoutController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\ProfileController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [UserProfileController::class, 'dashboard'])->name('dashboard');
    Route::put('user-profile-update', [UserProfileController::class, 'userProfileUpdate'])->name('user-profile.update');
    Route::post('profile-password-update', [UserProfileController::class, 'userPasswordUpdate'])->name('user-password.update');
    Route::post('user-shipping-address-update', [UserProfileController::class, 'userShippingAddressUpdate'])->name('user-shipping-address.update');

    /* Checkout Page */
    Route::get('checkout', [CheckoutController::class, 'index'])->name('checkout.index');
    Route::get('checkout-coupon-remove', [CheckoutController::class, 'removeCoupon'])->name('checkout-coupon.remove');

    /* Procceed Payment Button */
    Route::post('checkout-to-payment', [CheckoutController::class, 'checkoutToPayment'])->name('checkout-to-payment');

    /* Payment Route */
    Route::get('payment', [PaymentController::class, 'index'])->name('payment.index');

    /* Paypal Payment Route */
    Route::post('paypal-payment', [PaymentController::class, 'makePaypalPayment'])->name('make-paypal.payment');

    Route::get('paypal/payment', [PaymentController::class, 'payWithPaypal'])->name('paypal.payment');
    Route::get('paypal/success', [PaymentController::class, 'paypalSuccess'])->name('paypal.success');
    Route::get('paypal/cancel', [PaymentController::class, 'paypalCancel'])->name('paypal.cancel');

    Route::get('payment-success', [PaymentController::class, 'paymentSuccess'])->name('payment.success');
    Route::get('payment-cancel', [PaymentController::class, 'paymentCancel'])->name('payment.cancel');

    Route::post('bank-transfer-payment', [PaymentController::class, 'makeBankTransferPayment'])->name('make-bank-transfer.payment');
    Route::get('bank-transfer/success', [PaymentController::class, 'bankTransferSuccess'])->name('payment.transfer.success');

    Route::get('orders/{order}/details', [UserProfileController::class, 'showOrderDetails'])->name('orders.details');

});

require __DIR__.'/auth.php';


/* Admin Login Page */
Route::group(['middleware' => 'guest'], function(){

    Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');

});



/* Product all routes */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{slug}', [HomeController::class, 'showProduct'])->name('product.show');

Route::get('/load-product-modal/{productId}', [HomeController::class, 'loadProductModal'])->name('load-product-modal');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');


/* Cart routes */
Route::get('cart', [CartController::class, 'index'])->name('cart.index');
Route::post('cart-update', [CartController::class, 'cartQtyUpdate'])->name('cart.update.qty');
Route::get('cart-product-remove/{rowId}', [CartController::class, 'cartProductRemove'])->name('cart.product.remove');
Route::get('cart-destroy', [CartController::class, 'clearCart'])->name('cart.destroy');

/* Coupon Apply */
Route::post('coupon-apply', [CartController::class, 'couponApply'])->name('coupon.apply');
Route::get('coupon-remove', [CartController::class, 'removeCoupon'])->name('coupon.remove');



