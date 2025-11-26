<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Homepage');
})->name('home');

Route::get('/all-products', [ProductController::class, 'allProducts'])->name('products.index');

Route::get('/new-products', [ProductController::class, 'newProducts'])->name('products.new');

Route::get('/category/{slug}', [ProductController::class, 'category'])->name('products.category');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');

Route::get('/interior-design-service', [PageController::class, 'interiorDesignService'])->name('interior-design-service');

Route::get('/customer-service', [PageController::class, 'customerService'])->name('customer-service');

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/settings.php';
