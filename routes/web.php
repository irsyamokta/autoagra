<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\ReportController;
use App\Http\Controllers\FlightDataController;

Route::get('/', function () {
    return app(FlightDataController::class)->showIndex();
    // return view('frontend.index');
});
// Route::get('/report', [FlightDataController::class, 'showIndex'])->name('frontend.index');
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth'])->prefix('profile')->name('profile.')->group(function () {
    Route::get('/', [ProfileController::class, 'edit'])->name('edit');
    Route::patch('/', [ProfileController::class, 'update'])->name('update');
    Route::delete('/', [ProfileController::class, 'destroy'])->name('destroy');
});

//admin routes
Route::group(['middleware' => ['auth'], 'prefix' => 'admin', 'as' => 'admin.'], function () {
    //single action controllers
    Route::get('/', HomeController::class)->name('home');
    Route::get('/forms', [FlightDataController::class, 'create'])->name('forms');
    Route::post('/forms', [FlightDataController::class, 'store'])->name('store');
    Route::get('/index', [FlightDataController::class, 'index'])->name('index');

});

require __DIR__.'/auth.php';
