<?php

use Illuminate\Contracts\View\View;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function (){
    return view('home', [
        'active' => "home"
    ]);
});

Route::get('/movies', function () {
    return view('movies', [
        'active' => "movies"
    ]);
});

Route::get('/categories', function () {
    return view('categories', [
        'active' => "categories"
    ]);
});

Route::get('/news', function () {
    return view('news', [
        'active' => "news"
    ]);
});
