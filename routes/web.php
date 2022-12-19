<?php

use App\Http\Controllers\LoginController;
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

Route::get('/login', [LoginController::class, 'index']);
