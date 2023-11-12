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
    Route::get('service' , [\App\Http\Controllers\ServiceController::class , 'index']);
    Route::get('affiliatedEntity', [\App\Http\Controllers\AffiliatedEntityController::class , 'index']);
    Route::get('link', [\App\Http\Controllers\LinkController::class , 'index']);
    Route::get('news', [\App\Http\Controllers\NewsController::class , 'index']);
    Route::get('project', [\App\Http\Controllers\ProjectController::class , 'index']);
    Route::get('setting', [\App\Http\Controllers\SettingController::class , 'index']);
    Route::get('welcome', [\App\Http\Controllers\WelcomeController::class , 'index']);
    Route::get('contact', [\App\Http\Controllers\ContactController::class , 'index']);
});


Route::get('service/{service}' , [\App\Http\Controllers\ServiceController::class , 'show']);
Route::get('affiliatedEntity/{affiliatedEntity}', [\App\Http\Controllers\AffiliatedEntityController::class , 'show']);

Route::get('link/{link}', [\App\Http\Controllers\LinkController::class , 'show']);
Route::get('news/{news}', [\App\Http\Controllers\NewsController::class , 'show']);
Route::get('project/{project}', [\App\Http\Controllers\ProjectController::class , 'show']);
Route::get('setting/{setting}', [\App\Http\Controllers\SettingController::class , 'show']);
Route::get('welcome/{welcome}', [\App\Http\Controllers\WelcomeController::class , 'show']);



