<?php

use App\Http\Controllers\Admin\AdminDashboardController;
use App\Http\Controllers\Admin\Market\BrandController;
use App\Http\Controllers\Admin\Market\CategoryController;
use App\Http\Controllers\Admin\Market\CommentController;
use App\Http\Controllers\Admin\Market\DeliveryController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
|
*/

Route::prefix('admin')->namespace('Admin')->group(function () {
    Route::get('/', [AdminDashboardController::class, 'index'])->name('admin.home');
    Route::prefix('market')->namespace('Markrt')->group(function () {
        //category
        Route::prefix('category')->group(function () {
            Route::get('/', [CategoryController::class, 'index'])->name('admin.market.category.index');
            Route::get('/create', [CategoryController::class, 'create'])->name('admin.market.category.create');
            Route::post('/store', [CategoryController::class, 'store'])->name('admin.market.category.store');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('admin.market.category.edit');
            Route::put('/update', [CategoryController::class, 'update'])->name('admin.market.category.update');
            Route::delete('/delete/{id}', [CategoryController::class, 'destroy'])->name('admin.market.category.destroy');

            //Route::resource('category', CategoryController::class);
            // Route::resource('category', '\App\Http\Controllers\Admin\market\CategoryController');
        });

        //category
        Route::prefix('brand')->group(function () {
            Route::get('/', [BrandController::class, 'index'])->name('admin.market.brand.index');
            Route::get('/create', [BrandController::class, 'create'])->name('admin.market.brand.create');
            Route::post('/store', [BrandController::class, 'store'])->name('admin.market.brand.store');
            Route::get('/edit/{id}', [BrandController::class, 'edit'])->name('admin.market.brand.edit');
            Route::put('/update', [BrandController::class, 'update'])->name('admin.market.brand.update');
            Route::delete('/delete/{id}', [BrandController::class, 'destroy'])->name('admin.market.brand.destroy');
        });

        //comment
        Route::prefix('comment')->group(function () {
            Route::get('/', [CommentController::class, 'index'])->name('admin.market.comment.index');
            Route::get('/show', [CommentController::class, 'show'])->name('admin.market.comment.show');
            Route::post('/store', [CommentController::class, 'store'])->name('admin.market.comment.store');
            Route::get('/edit/{id}', [CommentController::class, 'edit'])->name('admin.market.comment.edit');
            Route::put('/update', [CommentController::class, 'update'])->name('admin.market.comment.update');
            Route::delete('/delete/{id}', [CommentController::class, 'destroy'])->name('admin.market.comment.destroy');
        });

        //delivery
        Route::prefix('delivery')->group(function () {
            Route::get('/', [DeliveryController::class, 'index'])->name('admin.market.delivery.index');
            Route::get('/create', [DeliveryController::class, 'create'])->name('admin.market.delivery.create');
            Route::post('/store', [DeliveryController::class, 'store'])->name('admin.market.delivery.store');
            Route::get('/edit/{id}', [DeliveryController::class, 'edit'])->name('admin.market.delivery.edit');
            Route::put('/update', [DeliveryController::class, 'update'])->name('admin.market.delivery.update');
            Route::delete('/delete/{id}', [DeliveryController::class, 'destroy'])->name('admin.market.delivery.destroy');
        });
    });
});
