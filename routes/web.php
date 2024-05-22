<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Controllers\FoodController;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\VendorMiddleware;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\CartItemController;
use App\Http\Controllers\CategoryController;
use App\Http\Middleware\RedirectToDashboard;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WishlistController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified', RedirectToDashboard::class])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'verified')->group(function () {
    Route::name('admin.')->prefix('admin')->group(function () {
        Route::middleware([AdminMiddleware::class])->group(function () {
            Route::name('dashboard.')->prefix('dashboard')->group(function () {
                Route::get('', [DashboardController::class, 'adminDashboard'])->name('dashboard');
            });
        });
    });

    Route::name('vendor.')->prefix('vendor')->group(function () {
        Route::middleware([VendorMiddleware::class])->group(function () {
            Route::name('dashboard.')->prefix('dashboard')->group(function () {
                Route::get('', [DashboardController::class, 'vendorDashboard'])->name('dashboard');
                Route::get('editprofile', [DashboardController::class, 'editVendorProfile'])->name('editprofile');
                Route::post('updateprofile/{id}', [DashboardController::class, 'updateVendorProfile'])->name('updateprofile');

                Route::name('category.')->prefix('category')->group(function () {
                    Route::get('', [CategoryController::class, 'index'])->name('index');
                    Route::get('create', [CategoryController::class, 'create'])->name('create');
                    Route::post('store', [CategoryController::class, 'store'])->name('store');
                    Route::get('show/{id}', [CategoryController::class, 'show'])->name('show');
                    Route::get('edit/{id}', [CategoryController::class, 'edit'])->name('edit');
                    Route::post('update/{id}', [CategoryController::class, 'update'])->name('update');
                    Route::get('{id}', [CategoryController::class, 'destroy'])->name('destroy');
                });

                Route::name('food.')->prefix('food')->group(function () {
                    Route::get('', [FoodController::class, 'index'])->name('index');
                    Route::get('create', [FoodController::class, 'create'])->name('create');
                    Route::post('store', [FoodController::class, 'store'])->name('store');
                    Route::get('show/{id}', [FoodController::class, 'show'])->name('show');
                    Route::get('edit/{id}', [FoodController::class, 'edit'])->name('edit');
                    Route::post('update/{id}', [FoodController::class, 'update'])->name('update');
                    Route::get('{id}', [FoodController::class, 'destroy'])->name('destroy');
                });
            });
        });
    });

    Route::name('user.')->prefix('user')->group(function () {
        Route::middleware([UserMiddleware::class])->group(function () {
            Route::name('dashboard.')->prefix('dashboard')->group(function () {
                Route::get('', [DashboardController::class, 'userDashboard'])->name('dashboard');
                Route::get('editprofile', [DashboardController::class, 'editUserProfile'])->name('editprofile');
                Route::post('updateprofile/{id}', [DashboardController::class, 'updateUserProfile'])->name('updateprofile');
                Route::name('food.')->prefix('food')->group(function () {
                    Route::get('', [FoodController::class, 'allFood'])->name('index');
                    Route::get('show/{id}', [FoodController::class, 'details'])->name('details');
                    Route::get('search', [FoodController::class, 'search'])->name('search');
                });
                Route::name('cart.')->prefix('cart')->group(function (){
                    Route::get('index', [CartItemController::class, 'index'])->name('index');
                    Route::post('store', [CartItemController::class, 'store'])->name('store');
                    Route::get('{id}', [CartItemController::class, 'destroy'])->name('destroy');
                });

                Route::name('wishlist.')->prefix('wishlist')->group(function (){
                    Route::get('index', [WishlistController::class, 'index'])->name('index');
                    Route::post('store', [WishlistController::class, 'store'])->name('store');
                    Route::get('{id}', [WishlistController::class, 'destroy'])->name('destroy');
                });
            });
        });
    });
});

require __DIR__ . '/auth.php';
