<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;


// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function(){
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

    Route::resource('/categories', CategoryController::class);
});

require __DIR__.'/auth.php';
