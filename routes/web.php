<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\CertificateController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});
Route::get('/list-product', [ProductController::class, 'list'])->name('products');
Route::get('/product', function () {
    return view('product');
});
Route::get('/product-detail/{id}', [ProductController::class, 'detail'])->name('product_detail');
Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::get('/prod', [ProductController::class, 'index'])->name('product.index');
    Route::post('/store-prod', [ProductController::class, 'store'])->name('product.store');
    Route::post('/update-prod', [ProductController::class, 'update'])->name('product.update');
    Route::post('/delete-prod', [ProductController::class, 'delete'])->name('product.delete');

    Route::get('/certificate', [CertificateController::class, 'index'])->name('certificate.index');
    Route::get('/qr-certificate/{id}', [CertificateController::class, 'get_qr'])->name('certificate.qr');
    Route::get('/qr-certificate/{id}/{sn}/{qr}', [CertificateController::class, 'view_certificate'])->name('certificate.view');
    Route::post('/store-certificate', [CertificateController::class, 'store'])->name('certificate.store');
    Route::post('/update-certificate', [CertificateController::class, 'update'])->name('certificate.update');
    Route::post('/delete-certificate', [CertificateController::class, 'delete'])->name('certificate.delete');

});

require __DIR__.'/auth.php';
