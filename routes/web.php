<?php
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

use App\Http\Controllers\ProductsController;
use App\Http\Controllers\DataController;
use App\Http\Controllers\ServicesController;
// use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ✅ Home Route (Handles homepage data)
Route::get('/', [DataController::class, 'index'])->name('home');

// ✅ List all products
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');

// ✅ Show single product
Route::get('/products/{id}', [ProductsController::class, 'show'])->name('products.show');

// ✅ Services Routes
Route::get('/services', [ServicesController::class, 'index'])->name('services.index');
Route::get('/services/{id}', [ServicesController::class, 'show'])->name('services.show');



// ✅ Blog Routes
Route::get('/blog', [DataController::class, 'blogList'])->name('blog');
Route::get('/blog/{id}', [DataController::class, 'blogDetails'])->name('blog.details');

// ✅ Testimonials Route
Route::get('/testimonials', [TestimonialsController::class, 'index'])->name('testimonials.index');

// ✅ Static Pages Routes
Route::view('/about-us', 'pages.about-us')->name('about-us');
Route::view('/what-we-do', 'pages.what-we-do')->name('what-we-do');




Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/packages', 'pages.packages')->name('packages');
Route::view('/why-choose-us', 'pages.why-choose-us')->name('why-choose-us');


Route::view('/faq', 'pages.faq')->name('faq');
Route::view('/terms-conditions', 'pages.terms-conditions')->name('terms-conditions');
Route::view('/return-policy', 'pages.return-policy')->name('return-policy');
Route::view('/privacy-policy', 'pages.privacy-policy')->name('privacy-policy');
Route::view('/login-page', 'pages.login-page')->name('login-page');
Route::view('/register-page', 'pages.register-page')->name('register-page');
Route::view('/forgot-password-page', 'pages.forgot-password-page')->name('forgot-password-page');
Route::view('/brand-listing', 'pages.brand-listing')->name('brand-listing');
Route::view('/wishlist', 'pages.wishlist')->name('wishlist');
Route::view('/cart', 'pages.cart')->name('cart');
Route::view('/checkout', 'pages.checkout')->name('checkout');
Route::view('/account', 'pages.account')->name('account');
Route::view('/order-details', 'pages.order-details')->name('order-details');





// ✅ Dashboard & Profile Routes (Authenticated Users Only)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // ✅ Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



Route::post('/contact-submit', function (Request $request) {
    $data = $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required',
    ]);

    // Process the email (Example: Log or send an email)
    \Log::info('Contact Form Submitted:', $data);

    return back()->with('success', 'Thank you! Your message has been sent.');
})->name('contact.submit');



// ✅ Include Authentication Routes
require __DIR__.'/auth.php';
