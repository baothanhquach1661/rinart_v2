<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Frontend\CartController;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\UserProfileController;
use App\Http\Controllers\ProfileController;
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

require __DIR__.'/auth.php';


/* Admin Login Page */
Route::group(['middleware' => 'guest'], function(){

    Route::get('admin/login', [AdminController::class, 'login'])->name('admin.login');

});


Route::group(['middleware' => 'auth'], function(){
    Route::get('dashboard', [UserProfileController::class, 'dashboard'])->name('dashboard');
    Route::put('user-profile-update', [UserProfileController::class, 'userProfileUpdate'])->name('user-profile.update');
    Route::post('profile-password-update', [UserProfileController::class, 'userPasswordUpdate'])->name('user-password.update');
});


/* Product all routes */
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/product/{slug}', [HomeController::class, 'showProduct'])->name('product.show');

Route::get('/load-product-modal/{productId}', [HomeController::class, 'loadProductModal'])->name('load-product-modal');
Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('add-to-cart');

