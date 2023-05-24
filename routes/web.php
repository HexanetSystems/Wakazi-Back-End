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


// Admin Routes
Auth::routes();
Route::group(['prefix' => '/admin'], function () {
    Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
    Route::get('', [AdminsController::class, 'adminHome'])->name('admin.home')->middleware('is_admin');

    // SiteSettings
    Route::get('credentials', [AdminsController::class, 'systemsCredentials'])->middleware('is_admin');
    Route::get('SiteSettings', [AdminsController::class, 'SiteSettings'])->middleware('is_admin');
    Route::get('SocialMediaSettings', [AdminsController::class, 'SocialMediaSettings'])->middleware('is_admin');
    Route::get('logo-and-favicon', [AdminsController::class, 'logo_and_favicon'])->middleware('is_admin');
    Route::post('logo-and-favicon-update', [AdminsController::class, 'logo_and_favicon_update'])->middleware('is_admin');

    // mailerSettings
    Route::get('mailerSettings', [AdminsController::class, 'mailerSettings'])->middleware('is_admin');

    // Terms and Conditions
    Route::get('terms', [AdminsController::class, 'terms'])->middleware('is_admin');
    Route::get('addTerms', [AdminsController::class, 'addTerms'])->middleware('is_admin');
    Route::get('editTerm/{id}', [AdminsController::class, 'editTerm'])->middleware('is_admin');
    Route::post('add_term', [AdminsController::class, 'add_term'])->middleware('is_admin');
    Route::post('edit_term/{id}', [AdminsController::class, 'edit_term'])->middleware('is_admin');
    Route::get('delete_term/{id}', [AdminsController::class, 'delete_term'])->middleware('is_admin');

    // Privacy Policy
    Route::get('privacy', [AdminsController::class, 'privacy'])->middleware('is_admin');
    Route::get('addPrivacy', [AdminsController::class, 'addPrivacy'])->middleware('is_admin');
    Route::get('editPrivacy/{id}', [AdminsController::class, 'editPrivacy'])->middleware('is_admin');
    Route::post('add_privacy', [AdminsController::class, 'add_privacy'])->middleware('is_admin');
    Route::post('edit_privacy/{id}', [AdminsController::class, 'edit_privacy'])->middleware('is_admin');
    Route::get('delete_privacy/{id}', [AdminsController::class, 'delete_privacy'])->middleware('is_admin');

    // Frequently Asked Questions
    Route::get('faq', [AdminsController::class, 'faq'])->middleware('is_admin');
    Route::get('addFaq', [AdminsController::class, 'addFaq'])->middleware('is_admin');
    Route::get('editFaq/{id}', [AdminsController::class, 'editFaq'])->middleware('is_admin');
    Route::post('add_Faq', [AdminsController::class, 'add_Faq'])->middleware('is_admin');
    Route::post('edit_Faq/{id}', [AdminsController::class, 'edit_Faq'])->middleware('is_admin');
    Route::get('delete_Faq/{id}', [AdminsController::class, 'delete_Faq'])->middleware('is_admin');

    // Risks Declaration
    Route::get('editRisk', [AdminsController::class, 'editRisk'])->middleware('is_admin');
    Route::post('edit_Risk', [AdminsController::class, 'edit_Risk'])->middleware('is_admin');

    // How It Works
    Route::get('how', [AdminsController::class, 'how'])->middleware('is_admin');
    Route::get('addHow', [AdminsController::class, 'addHow'])->middleware('is_admin');
    Route::get('editHow/{id}', [AdminsController::class, 'editHow'])->middleware('is_admin');
    Route::post('add_How', [AdminsController::class, 'add_How'])->middleware('is_admin');
    Route::post('edit_How/{id}', [AdminsController::class, 'edit_How'])->middleware('is_admin');
    Route::get('delete_How/{id}', [AdminsController::class, 'delete_How'])->middleware('is_admin');

    // Courses
    Route::get('courses', [AdminsController::class, 'courses'])->middleware('is_admin');
    Route::get('addCourse', [AdminsController::class, 'addCourse'])->middleware('is_admin');
    Route::get('editCourse/{id}', [AdminsController::class, 'editCourse'])->middleware('is_admin');
    Route::post('add_Course', [AdminsController::class, 'add_Course'])->middleware('is_admin');
    Route::post('edit_Course/{id}', [AdminsController::class, 'edit_Course'])->middleware('is_admin');
    Route::get('delete_Course/{id}', [AdminsController::class, 'delete_Course'])->middleware('is_admin');

    // Topics
    Route::get('topics', [AdminsController::class, 'topics'])->middleware('is_admin');
    Route::get('addTopic', [AdminsController::class, 'addTopic'])->middleware('is_admin');
    Route::get('editTopic/{id}', [AdminsController::class, 'editTopic'])->middleware('is_admin');
    Route::post('add_Topic', [AdminsController::class, 'add_Topic'])->middleware('is_admin');
    Route::post('edit_Topic/{id}', [AdminsController::class, 'edit_Topic'])->middleware('is_admin');
    Route::get('delete_Topic/{id}', [AdminsController::class, 'delete_Topic'])->middleware('is_admin');

    // Copyright Statement
    Route::get('editCopyright', [AdminsController::class, 'copyright'])->middleware('is_admin');
    Route::post('edit_Copyright', [AdminsController::class, 'edit_copyright'])->middleware('is_admin');

    // About Us
    Route::get('editAbout', [AdminsController::class, 'about'])->middleware('is_admin');
    Route::post('edit_About', [AdminsController::class, 'edit_about'])->middleware('is_admin');

    // Sliders
    Route::get('sliders', [AdminsController::class, 'slider'])->middleware('is_admin');
    Route::get('addSlider', [AdminsController::class, 'addSlider'])->middleware('is_admin');
    Route::post('add_Slider', [AdminsController::class, 'add_Slider'])->middleware('is_admin');
    Route::get('editSlider/{id}', [AdminsController::class, 'editSlider'])->middleware('is_admin');
    Route::post('edit_Slider/{id}', [AdminsController::class, 'edit_Slider'])->middleware('is_admin');
    Route::get('deleteSlider/{id}', [AdminsController::class, 'deleteSlider'])->middleware('is_admin');

    // Banners
    Route::get('banners', [AdminsController::class, 'banners'])->middleware('is_admin');
    Route::get('editBanner/{id}', [AdminsController::class, 'editBanner'])->middleware('is_admin');
    Route::post('edit_Banner/{id}', [AdminsController::class, 'edit_Banner'])->middleware('is_admin');

    // Messages
    Route::get('allMessages', [AdminsController::class, 'allMessages'])->middleware('is_admin');
    Route::get('unread', [AdminsController::class, 'unread'])->middleware('is_admin');
    Route::post('reply', [AdminsController::class, 'reply'])->middleware('is_admin');
    Route::get('read/{id}', [AdminsController::class, 'read'])->middleware('is_admin');
    Route::get('deleteMessage/{id}', [AdminsController::class, 'deleteMessage'])->middleware('is_admin');

    // Categories
    Route::get('categories', [AdminsController::class, 'categories'])->middleware('is_admin');
    Route::get('addCategory', [AdminsController::class, 'addCategory'])->middleware('is_admin');
    Route::post('add_Category', [AdminsController::class, 'add_Category'])->middleware('is_admin');
    Route::get('editCategories/{id}', [AdminsController::class, 'editCategories'])->middleware('is_admin');
    Route::post('edit_Category/{id}', [AdminsController::class, 'edit_Category'])->middleware('is_admin');
    Route::get('deleteCategory/{id}', [AdminsController::class, 'deleteCategory'])->middleware('is_admin');

    // Products
    Route::get('products', [AdminsController::class, 'products'])->middleware('is_admin');
    Route::get('addProduct', [AdminsController::class, 'addProduct'])->middleware('is_admin');
    Route::post('add_Product', [AdminsController::class, 'add_Product'])->middleware('is_admin');
    Route::get('editProducts/{id}', [AdminsController::class, 'editProducts'])->middleware('is_admin');
    Route::post('edit_Product/{id}', [AdminsController::class, 'edit_Product'])->middleware('is_admin');
    Route::get('deleteProduct/{id}', [AdminsController::class, 'deleteProduct'])->middleware('is_admin');



    Route::post('add_Variation', [AdminsController::class, 'add_Variation'])->middleware('is_admin');
    Route::post('edit_Variation/{id}', [AdminsController::class, 'edit_Variation'])->middleware('is_admin');
    Route::get('addVariation/color', [AdminsController::class, 'variations_color'])->middleware('is_admin');
    Route::get('addVariation/size', [AdminsController::class, 'variations_size'])->middleware('is_admin');
    Route::get('variations/color', [AdminsController::class, 'var_color'])->middleware('is_admin');
    Route::get('variations/size', [AdminsController::class, 'var_size'])->middleware('is_admin');
    Route::get('editVariation/{id}', [AdminsController::class, 'editVariation'])->middleware('is_admin');

    // Categories
    Route::get('categories', [AdminsController::class, 'categories'])->middleware('is_admin');
    Route::get('addCategory', [AdminsController::class, 'addCategory'])->middleware('is_admin');
    Route::post('add_Category', [AdminsController::class, 'add_Category'])->middleware('is_admin');
    Route::get('editCategories/{id}', [AdminsController::class, 'editCategories'])->middleware('is_admin');
    Route::post('edit_Category/{id}', [AdminsController::class, 'edit_Category'])->middleware('is_admin');
    Route::get('deleteCategory/{id}', [AdminsController::class, 'deleteCategory'])->middleware('is_admin');

    // Testimonials
    Route::get('testimonials', [AdminsController::class, 'testimonials'])->middleware('is_admin');
    Route::get('addTestimonial', [AdminsController::class, 'addTestimonial'])->middleware('is_admin');
    Route::post('add_Testimonial', [AdminsController::class, 'add_Testimonial'])->middleware('is_admin');
    Route::get('editTestimonial/{id}', [AdminsController::class, 'editTestimonial'])->middleware('is_admin');
    Route::post('edit_Testimonial/{id}', [AdminsController::class, 'edit_Testimonial'])->middleware('is_admin');

    // Signal
    Route::get('signals', [AdminsController::class, 'signals'])->middleware('is_admin');
    Route::get('addSignal', [AdminsController::class, 'addSignal'])->middleware('is_admin');
    Route::post('add_Signal', [AdminsController::class, 'add_Signal'])->middleware('is_admin');
    Route::get('editSignal/{id}', [AdminsController::class, 'editSignal'])->middleware('is_admin');
    Route::post('edit_Signal/{id}', [AdminsController::class, 'edit_Signal'])->middleware('is_admin');

    // Blog
    Route::get('blog', [AdminsController::class, 'blog'])->middleware('is_admin');
    Route::get('addBlog', [AdminsController::class, 'addBlog'])->middleware('is_admin');
    Route::post('add_Blog', [AdminsController::class, 'add_Blog'])->middleware('is_admin');
    Route::get('editBlog/{id}', [AdminsController::class, 'editBlog'])->middleware('is_admin');
    Route::post('edit_Blog/{id}', [AdminsController::class, 'edit_Blog'])->middleware('is_admin');
    Route::get('delete_Blog/{id}', [AdminsController::class, 'delete_Blog'])->middleware('is_admin');


    // Payments
    Route::get('b2b', [AdminsController::class, 'b2b'])->middleware('is_admin');
    Route::get('b2c', [AdminsController::class, 'b2c'])->middleware('is_admin');
    Route::get('lnmo_api_response', [AdminsController::class, 'lnmo_api_response'])->middleware('is_admin');
    Route::get('mobile_payments', [AdminsController::class, 'mobile_payments'])->middleware('is_admin');
    Route::get('reverse_transaction', [AdminsController::class, 'reverse_transaction'])->middleware('is_admin');
    Route::get('transaction_status', [AdminsController::class, 'transaction_status'])->middleware('is_admin');
    Route::get('accountbalance', [AdminsController::class, 'accountbalance'])->middleware('is_admin');
    Route::get('approve-transaction/{id}', [AdminsController::class, 'approve_transaction'])->middleware('is_admin');
    Route::get('approve-transaction-stk/{id}', [AdminsController::class, 'approve_transaction_stk'])->middleware('is_admin');

    // Enroll Users
    Route::get('enroll-users', [AdminsController::class, 'enroll_users'])->middleware('is_admin');
    Route::get('enroll-users-post/{id}', [AdminsController::class, 'enroll_users_post'])->middleware('is_admin');
    Route::post('enroll-user-now', [AdminsController::class, 'enroll_user_now'])->middleware('is_admin');

    //Manage Users
    Route::get('users', [AdminsController::class, 'users'])->middleware('is_admin');
    Route::get('admins', [AdminsController::class, 'admins'])->middleware('is_admin');
    Route::get('addUser', [AdminsController::class, 'addUser'])->middleware('is_admin');
    Route::get('editUser/{id}', [AdminsController::class, 'editUser'])->middleware('is_admin');
    Route::post('add_User', [AdminsController::class, 'add_User'])->middleware('is_admin');
    Route::post('edit_User/{id}', [AdminsController::class, 'edit_User'])->middleware('is_admin');
    Route::get('delete_user/{id}', [AdminsController::class, 'delete_user'])->middleware('is_admin');
    Route::get('switchRole/{id}', [AdminsController::class, 'switchRole'])->middleware('is_admin');
    Route::get('switchStatus/{id}', [AdminsController::class, 'switchStatus'])->middleware('is_admin');

    Route::get('updateSlung', [AdminsController::class, 'updateSlung'])->middleware('is_admin');




    Route::get('activitylogs', [AdminsController::class, 'activitylogs'])->middleware('is_admin');


    // AJAX REQUESTS
    Route::post('addCategoryAjaxRequest', [AdminsController::class, 'addCategoryAjaxRequest'])->middleware('is_admin');
    Route::post('deleteBlogAjax', [AdminsController::class, 'deleteBlogAjax'])->middleware('is_admin');
    Route::put('updateSiteSettingsAjax', [AdminsController::class, 'updateSiteSettingsAjax'])->middleware('is_admin');
    Route::put('updateMailerAjax', [AdminsController::class, 'updateMailerAjax'])->middleware('is_admin');
    Route::put('updateSiteSocialMediaAjax', [AdminsController::class, 'updateSiteSocialMediaAjax'])->middleware('is_admin');
    Route::put('updateSiteCredentials', [AdminsController::class, 'updateSiteCredentials'])->middleware('is_admin');
    Route::post('deleteCategoryAjax', [AdminsController::class, 'deleteCategoryAjax'])->middleware('is_admin');
    Route::post('deleteTestimonialAjax', [AdminsController::class, 'deleteTestimonialAjax'])->middleware('is_admin');
    Route::post('deleteSliderAjax', [AdminsController::class, 'deleteSliderAjax'])->middleware('is_admin');
    Route::post('deleteC2BAjax', [AdminsController::class, 'deleteC2BAjax'])->middleware('is_admin');
    Route::post('deleteB2BAjax', [AdminsController::class, 'deleteB2BAjax'])->middleware('is_admin');
    Route::post('deleteB2CAjax', [AdminsController::class, 'deleteB2CAjax'])->middleware('is_admin');
    Route::post('deleteBalAjax', [AdminsController::class, 'deleteBalAjax'])->middleware('is_admin');
    Route::post('deleteSTKAjax', [AdminsController::class, 'deleteSTKAjax'])->middleware('is_admin');
    Route::post('deleteReverseAjax', [AdminsController::class, 'deleteReverseAjax'])->middleware('is_admin');
    Route::post('deleteTransactionAjax', [AdminsController::class, 'deleteTransactionAjax'])->middleware('is_admin');
    Route::post('deleteUserAjax', [AdminsController::class, 'deleteUserAjax'])->middleware('is_admin');
    Route::post('deleteFaqAjax', [AdminsController::class, 'deleteFaqAjax'])->middleware('is_admin');
    Route::post('deletePrivacyAjax', [AdminsController::class, 'deletePrivacyAjax'])->middleware('is_admin');
    Route::post('deleteTermsAjax', [AdminsController::class, 'deleteTermsAjax'])->middleware('is_admin');
    Route::post('deleteHowAjax', [AdminsController::class, 'deleteHowAjax'])->middleware('is_admin');
    Route::post('deleteCoursesAjax', [AdminsController::class, 'deleteCoursesAjax'])->middleware('is_admin');
    Route::post('deleteTopicsAjax', [AdminsController::class, 'deleteTopicsAjax'])->middleware('is_admin');
    Route::post('deleteSignalsAjax', [AdminsController::class, 'deleteSignalsAjax'])->middleware('is_admin');
    Route::post('deleteProductAjax', [AdminsController::class, 'deleteProductAjax'])->middleware('is_admin');

    Route::get('addProductToFacebookPixel', [AdminsController::class, 'addProductToFacebookPixel'])->middleware('is_admin');
    Route::get('emptyProductToFacebookPixel', [AdminsController::class, 'emptyProductToFacebookPixel'])->middleware('is_admin');

});
