<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\EncategoryController;
use App\Http\Controllers\Admin\EnproductController;
use App\Http\Controllers\Admin\NocategoryController;
use App\Http\Controllers\Admin\NoproductController;
use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\EncategoryController::class, 'index'])->name('main');
Route::get('en/category/{slug}.html', [App\Http\Controllers\EncategoryController::class, 'more'])->name('encategory.more');
Route::get('/products', [App\Http\Controllers\EnproductController::class, 'index'])->name('products');
Route::get('en/products/{slug}.html', [App\Http\Controllers\EnproductController::class, 'more'])->name('enproduct.more');

Auth::routes();

Route::post('/upload', [UploadController::class, 'upload'])->name('upload.image');
Route::delete('/deleteimage/{id}', [App\Http\Controllers\Admin\EnproductController::class, 'deleteimage']);
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix' => 'inside', 'middleware' => ['auth']], function () {
    Route::get('/', [DashboardController::class, 'index'])->name('mainAdmin');
    Route::resource('encategory', EncategoryController::class);
    Route::resource('enproduct', EnproductController::class);
    Route::resource('nocategory', NocategoryController::class);
    Route::resource('noproduct', NoproductController::class);
});
