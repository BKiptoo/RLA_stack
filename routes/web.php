<?php

use App\Http\Controllers\HomeController;
use App\Livewire\Admin\Auth\Login;
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

// Auth Routes
Route::middleware(['guest'])->group(function () {
    Route::get('/admin/auth/login', Login::class)->name('auth.login');
});
