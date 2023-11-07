<?php

use App\Http\Controllers\Admin\AffiliatedEntityController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});


//Route::middleware('setAppLang')->prefix('{locale}')->group(function (){
    Route::resource('/affiliated-entities' , AffiliatedEntityController::class)->names('affiliated-entities');
    Route::resource('/services' , \App\Http\Controllers\Admin\ServiceController::class)->names('services');
//});
