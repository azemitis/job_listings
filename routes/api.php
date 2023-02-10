<?php

use App\Http\Controllers\API\AuthController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GetController;
use App\Http\Controllers\Jobcontroller;


/** Parse data to Vue */
Route::apiResource('jobs', Jobcontroller::class)->only(['index', 'show']);


/** Not implemented yet Sanctum protected Vue routes and Auth routes */
// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });
// Route::group(['middleware' => 'auth:sanctum'], function () {
//     Route::get('/get', GetController::class);
// });

// Route::post('/login', [AuthController::class, 'login']);
// Route::post('/register', [AuthController::class, 'register']);
// Route::post('/logout', [AuthController::class, 'logout']);
