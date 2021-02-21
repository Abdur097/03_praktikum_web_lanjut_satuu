<?php

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

// 1. Halaman Home (Route Biasa)
Route::get('/', function () {
    return redirect('https://www.educastudio.com/');
});

// 2. Halaman Produk (Route Prefix)
Route::prefix('/category')->group(function () {
    Route::get('/marbel-edu-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-edu-games');
    });
    Route::get('/marbel-and-friends-kids-games', function () {
        return redirect('https://www.educastudio.com/category/marbel-and-friends-kids-games');
    });
    Route::get('/riri-story-books', function () {
        return redirect('https://www.educastudio.com/category/riri-story-books');
    });
    Route::get('/kolak-kids-songs', function () {
        return redirect('https://www.educastudio.com/category/kolak-kids-songs');
    });
});

// 3. Halaman Berita (Route Parameter)
Route::get('news', function(){
    return redirect('https://www.educastudio.com/news');
});

Route::get('news/{title}', function($title){
    return redirect('https://www.educastudio.com/news/' . $title);
});

// 4. Halaman Program (Route Prefix)
Route::prefix('/program')->group(function () {
    Route::get('/karir', function () {
        return redirect('https://www.educastudio.com/program/karir');
    });
    Route::get('/magang', function () {
        return redirect('https://www.educastudio.com/program/magang');
    });
    Route::get('/kunjungan-industri', function () {
        return redirect('https://www.educastudio.com/program/kunjungan-industri');
    });
});

// 5. Halaman About Us (Route Biasa)
Route::get('/about-us', function () {
    return redirect('https://www.educastudio.com/about-us');
});

// 6. Halaman Contact Us (Route)
Route::resource('/contact', ContactController::class, [
    'only' => ['create', 'store']
]);


