<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\UserMiddleware;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Middleware\VendorMiddleware;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\RedirectToDashboard;

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
            });
        });
    });
});

require __DIR__ . '/auth.php';
