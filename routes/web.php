<?php

use App\Http\Controllers\HomeController;
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

// 1. Halaman Awal Website (Route Biasa)
Route::get('/home', [HomeController::class, 'home']);

// 2.  Halaman Produk (Route Prefix)
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', [ProductController::class, 'edugames']);
    Route::get('/marbel-and-friends-kids-games', [ProductController::class, 'friendskidsgames']);
    Route::get('/riri-story-books', [ProductController::class, 'riristorybooks']);
    Route::get('/kolak-kids-songs', [ProductController::class, 'kolakkidssongs']);
});

// 3. Halaman Berita (Route Parameter)
Route::get('/news/{parameter}', [NewsController::class, 'newsParameter']);

// 4. Halaman Program (Route Prefix)
Route::prefix('program')->group(function () {
    Route::get('/karir', [ProgramController::class, 'karir']);
    Route::get('/magang', [ProgramController::class, 'magang']);
    Route::get('/kunjungan-industri', [ProgramController::class, 'kunjunganIndustri']);
});

// 5. Halaman About Us (Route Biasa)
Route::get('/about-us', [AboutUsController::class, 'aboutus']);


// 6. Halaman Contact Us (Route)
Route::get('/contact-us', [ContactUsController::class, 'contactus']);