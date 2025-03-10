<?php

use App\Http\Controllers\DataController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\ServicesController;
use App\Http\Controllers\TestimonialsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ✅ Home Route (Handles homepage data)
Route::get('/', [DataController::class, 'index'])->name('home');




// ✅ Products Routes
Route::get('/products', [ProductController::class, 'index'])->name('products.index');

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
Route::view('/services', 'pages.service')->name('service'); 
Route::view('/contact', 'pages.contact')->name('contact');
Route::view('/packages', 'pages.packages')->name('packages');
Route::view('/why-choose-us', 'pages.why-choose-us')->name('why-choose-us');

Route::get('/products', function () {
    return view('pages.products');
})->name('products');



// ✅ Dashboard & Profile Routes (Authenticated Users Only)
Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('/dashboard', 'dashboard')->name('dashboard');

    // ✅ Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ✅ Include Authentication Routes
require __DIR__.'/auth.php';
