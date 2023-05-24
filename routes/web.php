<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\AdminsController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\BlogController;

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

Route::get('/', [HomeController::class, 'index'])->name('homes');
Route::get('/about-us', [HomeController::class, 'about']);
Route::get('/products', [HomeController::class, 'products']);
Route::get('/products-categories', [HomeController::class, 'products_categories']);
Route::get('/products/{slung}', [HomeController::class, 'products_cat']);
Route::get('/quick-view/{id}', [HomeController::class, 'quick_view']);
Route::get('/product/{slung}', [HomeController::class, 'product']);
Route::get('/contact-us', [HomeController::class, 'contact']);
Route::get('/privacy-policy', [HomeController::class, 'privacy']);
Route::get('/delivery-policy', [HomeController::class, 'delivery_policy']);
Route::get('/return-policy', [HomeController::class, 'return_policy']);
Route::get('/terms-and-conditions', [HomeController::class, 'terms']);
Route::get('/copyright-statement', [HomeController::class, 'copyright']);
Route::get('/frequently-asked-questions', [HomeController::class, 'faq']);


// Translator & Currency Swap
Route::get('/google-translate',[App\Http\Controllers\HomeController::class, 'translate'])->name('translate');
Route::get('/currency-swap/{code}',[App\Http\Controllers\HomeController::class, 'swap'])->name('swap');

// Blog &
Route::get('/latest-news', [BlogController::class, 'index']);
Route::get('/latest-news/{slung}', [BlogController::class, 'blog']);
Route::post('/latest-news/post-comment', [BlogController::class, 'post_comment']);
Route::get('/latest-news/category/{slung}', [BlogController::class, 'blog_cat']);

// Shopping Cart
Route::group(['prefix'=>'shopping-cart'], function(){
    Route::get('', [CartController::class, 'index'])->name('shopping-cart');
    Route::get('/wishlist', [CartController::class, 'wishlist'])->name('wish-list');
    Route::get('/checkout', [CheckoutController::class, 'index'])->name('dashboard');
    Route::get('/payment', [CheckoutController::class, 'payment'])->name('payment');
    Route::get('/place-order', [CartController::class, 'place_order']);
    Route::get('/complete-order', [CartController::class, 'complete_order']);
    Route::get('/add-to-cart/{id}', [CartController::class, 'addToCart'])->name('cart.addtocart');
    Route::get('/add-to-wishlist/{id}', [CartController::class, 'addWishlist'])->name('cart.wishlist');
    Route::post('/add-to-cart', [CartController::class, 'addToCart'])->name('cart.addtocart');
    Route::post('/add-to-cart-now', [CartController::class, 'addToCart'])->name('cart.addtocartnow');
    Route::get('/remove-from-cart/{id}', [CartController::class, 'remove'])->name('cart.removecart');
    Route::post('/remove-cart-post}', [CartController::class, 'remover'])->name('cart.removercart');
    Route::get('/remove-wishlist/{id}', [CartController::class, 'remove_wishlist'])->name('cart.remove.wishlist');
    Route::get('/checkout/make-payment', [App\Http\Controllers\ShopController::class, 'make_payments'])->name('payment'); //Updates Data
    Route::post('/checkout/make-payments', [App\Http\Controllers\ShopController::class, 'make_payment'])->name('checkout');
});

// Login & Register
Route::post('/secure-login', [App\Http\Controllers\HomeController::class, 'handleLogin']);
Route::post('/secure-sign-up', [App\Http\Controllers\HomeController::class, 'handleSignUp']);

// Vendor Dashboard
Auth::routes();
Route::group(['prefix'=>'dashboard'], function(){
    Route::get('/', [ClientController::class, 'index'])->name('dashboard.home');
    Route::post('/update-settings', [ClientController::class, 'save'])->name('dashboard.update');

    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    // SocialMedia
    Route::get('/facebook', [LoginController::class, 'facebook']);
    Route::get('/facebook/redirect', [LoginController::class, 'facebookRedirect']);
    Route::get('/google', [LoginController::class, 'google']);
    Route::get('/google/redirect', [LoginController::class, 'googleRedirect']);
});

Route::group(['prefix' => '/webhooks'], function () {
    //PESAPAL
    Route::get('donepayment', [App\Http\Controllers\PaymentsController::class, 'paymentsuccess'])->name('paymentsuccess');
    Route::get('paymentconfirmation', [App\Http\Controllers\PaymentsController::class, 'paymentconfirmation']);
});
