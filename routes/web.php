<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\FlightDataController;

Route::get('/', function () {
    return app(FlightDataController::class)->showIndex();
});

Route::prefix('admin')->middleware(['auth', 'verified'])->group(function () {
    Route::get('/', HomeController::class)->name('admin.home');
    Route::get('/forms', [FlightDataController::class, 'create'])->name('admin.forms');
    Route::post('/forms', [FlightDataController::class, 'store'])->name('admin.store');
    Route::get('/index', [FlightDataController::class, 'index'])->name('admin.index');
});


require __DIR__.'/auth.php';
