<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InfusionController;

Route::post('/infusions', [InfusionController::class, 'store']);
     
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
