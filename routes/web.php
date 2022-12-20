<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home', [
        "title" => "Home",
        "active" => 'home'
    ]);
});

Route::get('/about', function () {
    return view('about', [
        "title" => "about",
        "active" => 'about',
        "judul1" => "A journey of umami woven into a melody of flavors in every dish",
        "desk1" => "A Delectable Distinguished Omakase Like No Other. Exclusive & Unorthodox. A Feast for the Palette. A Break From the Hustle, Residing On A Rooftop; Evoking Moments To Remember.",
        "judul2" => "Our Philosophy",
        "desk2" => "Depending on the day of your visit to the restaurant, you will experience one of our creations.
        Whisper to us about your feelings, and we will prepare what you need now.",

    ]);
});

Route::get('/rooftop', function () {
    return view('rooftop', [
        "title" => "Rooftop",
        "active" => 'rooftop'
    ]);
});

Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware('auth');
