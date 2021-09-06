<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\VerificationController;


Route::get('/test', function(){
    return 'This is changed from backend';
});

Route::post('/verify', [VerificationController::class, 'verify']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


