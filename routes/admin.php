<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\AdminProfileController;
use App\Http\Controllers\Admin\BlogCategoryController;
use App\Http\Controllers\Admin\BlogController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\CouponController;
use App\Http\Controllers\Admin\CtaController;
use App\Http\Controllers\Admin\DailyOfferController;
use App\Http\Controllers\Admin\DeliveryController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\PaymentGatewayController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ProductGalleryController;
use App\Http\Controllers\Admin\ProductVariantController;
use App\Http\Controllers\Admin\ProductVariantItemController;
use App\Http\Controllers\Admin\ServicesController;
use App\Http\Controllers\Admin\SettingController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\SubCategoryController;

Route::group(['prefix' => 'admin', 'as' => 'admin.'], function(){

    Route::get('dashboard', [AdminController::class, 'dashboard'])->name('dashboard');

    /* admin profile route */
    Route::get('profile', [AdminProfileController::class, 'profile'])->name('profile');
    Route::post('profile/update', [AdminProfileController::class, 'profileUpdate'])->name('profile.update');
    Route::post('profile/update/password', [AdminProfileController::class, 'passwordUpdate'])->name('password.update');


    /* Slider routes */
    Route::resource('slider', SliderController::class);

    /* CTA all routes */
    Route::resource('cta', CtaController::class);


    /* Category routes */
    Route::resource('category', CategoryController::class);


    /* SubCategory routes */
    Route::resource('sub-category', SubCategoryController::class);


    /* Product routes */
    Route::resource('product', ProductController::class);
    Route::get('get-subcategories', [ProductController::class, 'getSubCategories'])
        ->name('product.get-subcategories');


    /* Product Gallery routes */
    Route::get('product-gallery/{product}', [ProductGalleryController::class, 'index'])
        ->name('product-gallery.show-index');
    Route::resource('product-gallery', ProductGalleryController::class);

    /* Product Variant routes */
    Route::resource('product-variant', ProductVariantController::class);

    /* product variation item routes */
    Route::get('product-variant-item/{product_id}/{variant_id}', [ProductVariantItemController::class, 'index'])->name('product.variant-item.index');
    Route::get('product-variant-item-create/{product_id}/{variant_id}', [ProductVariantItemController::class, 'create'])->name('product.variant-item.create');
    Route::post('product-variant-item', [ProductVariantItemController::class, 'store'])->name('product.variant-item.store');
    Route::get('product-variant-item-edit/{variantItemId}', [ProductVariantItemController::class, 'edit'])->name('product.variant-item.edit');
    Route::put('product-variant-item-update/{variant_id}', [ProductVariantItemController::class, 'update'])->name('product.variant-item.update');
    Route::delete('product-variant-item-delete/{variantItemId}', [ProductVariantItemController::class, 'destroy'])->name('product.variant-item.destroy');

    Route::put('product-variant-item/change-status', [ProductVariantItemController::class, 'changeStatus'])->name('product.variant-item.change-status');


    /* Setting Routes */
    Route::get('setting', [SettingController::class, 'index'])->name('setting.index');
    Route::put('general-setting', [SettingController::class, 'updateGeneralSetting'])->name('general-setting.update');
    Route::put('pusher-setting', [SettingController::class, 'updatePusherSetting'])->name('pusher-setting.update');


    /* Coupon routes */
    Route::resource('coupon', CouponController::class);


    /* Delivery routes */
    Route::resource('delivery', DeliveryController::class);


    /* Daily Offer routes */
    Route::resource('daily-offer', DailyOfferController::class);


    /* Service Detail routes */
    Route::resource('service', ServicesController::class);


    /* Blog Category routes */
    Route::resource('blog-category', BlogCategoryController::class);


    /* Blog routes */
    Route::resource('blog', BlogController::class);
    Route::get('blog-comments', [BlogController::class, 'blogComments'])->name('blog.comments');
    Route::get('blog-comments/{id}', [BlogController::class, 'blogCommentStatusUpdate'])->name('blog.comments.status.update');
    Route::delete('blog-comments/delete/{id}', [BlogController::class, 'blogCommentDestroy'])->name('blog.comments.destroy');


    /* Payment Gateway Setting Routes */
    Route::get('payment-gateway-setting', [PaymentGatewayController::class, 'index'])->name('payment-gateway-setting.index');
    Route::put('payment-gateway-setting-update', [PaymentGatewayController::class, 'paypalSettingUpdate'])->name('payment-gateway-setting.update');


    /* Orders Routes */
    Route::get('orders', [OrderController::class, 'index'])->name('order.index');
    Route::get('order-invoice/{order_id}', [OrderController::class, 'invoice'])->name('order.invoice');
    Route::get('order-show/{order_id}', [OrderController::class, 'show'])->name('order.show');
    Route::put('orders/status-update/{order_id}', [OrderController::class, 'orderStatusUpdate'])->name('order.status.update');
    Route::delete('order/{order_id}', [OrderController::class, 'destroy'])->name('order.destroy');

    Route::get('orders-pending', [OrderController::class, 'pendingOrdersIndex'])->name('orders-pending.index');
    Route::get('orders-processing', [OrderController::class, 'processingOrdersIndex'])->name('orders-processing.index');
    Route::get('orders-shipping', [OrderController::class, 'shippingOrdersIndex'])->name('orders-shipping.index');
    Route::get('orders-delivered', [OrderController::class, 'deliveredOrdersIndex'])->name('orders-delivered.index');
    Route::get('orders-canceled', [OrderController::class, 'canceledOrdersIndex'])->name('orders-canceled.index');


});

