<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DivisionController;
use App\Http\Controllers\DistrictController;
use App\Http\Controllers\UpazilaController;
use App\Http\Controllers\VaccineController;
use App\Http\Controllers\VaccinationCenterController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\PersonController;


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

    Route::resource('/districts', DistrictController::class);
    Route::resource('/upazilas', UpazilaController::class);
    Route::resource('/vaccines', VaccineController::class);
    Route::resource('/vaccination-centers', VaccinationCenterController::class);
    Route::resource('/registrations', RegistrationController::class);
    Route::resource('/persons', PersonController::class);

    Route::post('/districts-enable-disable/{id}', [DistrictController::class, 'enableDisable'])->name('districts-enable-disable');
    Route::post('/upazilas-enable-disable/{id}', [UpazilaController::class, 'enableDisable'])->name('upazilas-enable-disable');
    Route::post('/vaccines-enable-disable/{id}', [VaccineController::class, 'enableDisable'])->name('vaccines-enable-disable');
});

require __DIR__.'/auth.php';
