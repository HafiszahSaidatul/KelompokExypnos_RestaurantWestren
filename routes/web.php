<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Models\Category;

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
        "judul2" => "Affomato Western",
        "desk2" => "Depending on the day of your visit to the restaurant, you will experience one of our creations. Whisper to us about your feelings, and we will prepare what you need now, and for tourists you will 
        feel back to your hometown and for domestic people it will be like going abroad by tasting food in our restaurant,fast food, fast casual, casual, fine dining, gastropub, fusion, neighborhood and sports lover dining.
        Other popular concepts include family dining, bistros, coffee shops, buffets, mid-range dining and mobile food trucks",

    ]);
});

Route::get('/rooftop', function () {
    return view('rooftop', [
        "title" => "rooftop",
        "active" => 'rooftop'
    ]);
});

Route::get('/menu', function () {
    return view('menu', [
        "title" => "menu",
        "active" => 'menu'
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'title' => 'Post Categories',
        'active' => 'categories',
        'categories' => Category::all()
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
