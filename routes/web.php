<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/categories', CategoryController::class);
    Route::resource('/divisions', DivisionController::class);
    Route::post('/divisions-enable-disable/{id}', [DivisionController::class, 'enableDisable'])->name('divisions-enable-disable');
});

require __DIR__.'/auth.php';
