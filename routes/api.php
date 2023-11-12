<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('setAppLang')->prefix('{locale}')->group(function () {
    Route::apiResource('service', \App\Http\Controllers\ServiceController::class);
    Route::apiResource('affiliatedEntity', \App\Http\Controllers\AffiliatedEntityController::class);
    Route::apiResource('contact', \App\Http\Controllers\ContactController::class);
    Route::apiResource('link', \App\Http\Controllers\LinkController::class);
    Route::apiResource('news', \App\Http\Controllers\NewsController::class);
    Route::apiResource('project', \App\Http\Controllers\ProjectController::class);
    Route::apiResource('setting', \App\Http\Controllers\SettingController::class);
    Route::apiResource('welcome', \App\Http\Controllers\WelcomeController::class);
});