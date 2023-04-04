<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardMovieController;
use App\Http\Controllers\GenreDashboardController;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\ReviewController;

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
        'active' => "home",
        'title' => "Home"
    ]);
});

Route::get('/movies', [MovieController::class, 'index']);
Route::get('/reviews', [ReviewController::class, 'index']);
Route::get('/categories', [CategoryController::class, 'index']);
Route::get('/news', [NewsController::class, 'index']);
Route::get('/login', [RegisterController::class, 'login'])->name('loginw')->middleware('guest');
Route::post('/login', [RegisterController::class, 'authenticate']);
Route::get('/register', [RegisterController::class, 'register'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth');
Route::post('/logout', [RegisterController::class, 'logout'])->middleware('auth');

// // dashboard routes
Route::resource('/dashboard/movies', DashboardMovieController::class);
Route::resource('/dashboard/genres', GenreDashboardController::class);
