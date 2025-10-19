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

Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('/select-role', [HomeController::class, 'selectRole'])->name('select.role');
Route::post('/select-role', [HomeController::class, 'redirectToLogin'])->name('role.redirect');

Route::get('/', function () {
<<<<<<< HEAD
    return redirect('login');
    // return view('auth.login');
=======
    return redirect('/home');
>>>>>>> 0055f57e8b412efa0d89fa2b190be0023b24714a
});


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');


    // borsha
    Route::resource('products', ProductController::class);
    Route::resource('categories', CategoryController::class);
    Route::resource('tags', TagController::class);
    Route::resource('orders', OrderController::class);
    Route::resource('order-items', OrderItemController::class);
    Route::resource('reviews', ReviewController::class);
});

require __DIR__.'/auth.php';
