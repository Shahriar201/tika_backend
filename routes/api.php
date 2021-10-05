<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VerificationController;
use App\Http\Controllers\Api\CategoryController;
use App\Http\Controllers\Api\DistrictController;
use App\Http\Controllers\Api\DivisionController;
use App\Http\Controllers\Api\UpazilaController;
use App\Http\Controllers\Api\VaccinationCenterController;


Route::get('/test', function(){
    return 'This is changed from backend';
});

Route::post('/verify', [VerificationController::class, 'verify']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/divisions', [DivisionController::class, 'index']);
Route::get('/districts', [DistrictController::class, 'index']);
Route::get('/upazilas', [UpazilaController::class, 'index']);
Route::get('/vaccination-centers', [VaccinationCenterController::class, 'index']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


