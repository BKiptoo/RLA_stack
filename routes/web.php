<?php

use App\Http\Controllers\HomeController;
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

Route::get('/{page?}', function () {
    return view('welcome');
});

Route::get('/{page?}', [HomeController::class, 'index'])->where('page', 'home|about|services|team|blog|news|contact')->name('front.home');