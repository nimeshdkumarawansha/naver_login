<?php

use App\Http\Controllers\Auth\NaverAuthController;
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

Route::get('auth/naver', [NaverAuthController::class,'redirectToNaver'])->name('naver.login');
Route::get('auth/naver/callback', [NaverAuthController::class,'handleNaverCallback'])->name('naver.callback');
