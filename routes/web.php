<?php

use App\Http\Controllers\BrandController;
use App\Http\Controllers\CatalogueAndEbooksController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShowroomController;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use Laravel\Fortify\Features;

Route::get('/', function () {
    return Inertia::render('Homepage');
})->name('home');

Route::get('/all-products', [ProductController::class, 'allProducts'])->name('products.index');

Route::get('/new-products', [ProductController::class, 'newProducts'])->name('products.new');

Route::get('/category/{slug}', [ProductController::class, 'category'])->name('products.category');

Route::get('/products/{slug}', [ProductController::class, 'show'])->name('products.show');

Route::get('/about', [PageController::class, 'about'])->name('about');

Route::get('/contact-us', [PageController::class, 'contact'])->name('contact');

Route::get('/interior-design-service', [PageController::class, 'interiorDesignService'])->name('interior-design-service');

Route::get('/customer-service', [PageController::class, 'customerService'])->name('customer-service');

Route::prefix('brands')->name('brands.')->group(function () {

    Route::get('/', [BrandController::class, 'index'])->name('index');

    Route::get('/{slug}', [BrandController::class, 'show'])->name('show');
});

Route::prefix('showrooms')->name('showrooms.')->group(function () {

    Route::get('/', [ShowroomController::class, 'index'])->name('index');

    Route::get('/{slug}', [ShowroomController::class, 'show'])->name('show');
});

Route::prefix('catalogues-and-ebooks')->name('catalogues-and-ebooks')->group(function () {

    Route::get('/', [CatalogueAndEbooksController::class, 'index'])->name('index');

    Route::get('/{slug}', [CatalogueAndEbooksController::class, 'show'])->name('show');
});

Route::prefix('downloads')->name('downloads')->group(function () {
    Route::post('/general-download', [FormController::class, 'generalDownload'])->name('general');
});

Route::get('dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


require __DIR__ . '/settings.php';
