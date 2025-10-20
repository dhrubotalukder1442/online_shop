<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderItemController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReviewController;
use App\Http\Controllers\TagController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;

Route::get('/', function () {
    return redirect('/home');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/select-role', [HomeController::class, 'selectRole'])->name('select.role');
Route::post('/select-role', [HomeController::class, 'redirectToLogin'])->name('role.redirect');

Route::get('/', function () {
    return redirect('login');
});
// Admin Dashboard
Route::get('/admin/dashboard', [HomeController::class, 'adminDashboard'])
    ->name('admin.dashboard')
    ->middleware(['auth']); // optional

// product count
Route::get('/dashboard', [HomeController::class, 'index'])->name('dashboard');


Route::post('/logout-confirm', function () {
    auth()->logout();
    return redirect()->route('home');
})->name('logout.confirm');


Route::post('/products/{id}/upload-image', [ProductController::class, 'uploadImage'])
     ->name('products.uploadimage'); // ⚠️ match name exactly as in Blade
Route::post('/products/{id}/upload-image', [ProductController::class, 'uploadImage'])
    ->name('products.uploadimage');


// Dashboard
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// ✅ All protected routes
Route::middleware('auth')->group(function () {

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // ✅ Resource controllers
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('order-items', OrderItemController::class);
    Route::resource('reviews', ReviewController::class);

    // ✅ Custom routes (after resource)
    Route::post('/products/{id}/upload-image', [ProductController::class, 'uploadImage'])->name('products.uploadimage');
    Route::get('/products/{id}/details', [ProductController::class, 'show'])->name('products.show');
});

require __DIR__.'/auth.php';
