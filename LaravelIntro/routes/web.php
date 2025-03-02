<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\AuthController;
use Psy\CodeCleaner\FunctionContextPass;
use App\Http\Controllers\CastController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\FilmController;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;

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
Auth::routes();
Route::post('/logout', [LogoutController::class, 'logout'])->name('logout');
Route::get('/', [DashboardController::class, 'index']);
Route::post('/register', [RegisterController::class, 'register'])->name('register');
Route::post('/welcome', [AuthController::class, 'welcome']);

Route::get('/data-table', function() {
    return view('pages.data-table');
});

Route::get('table', function() {
    return view('pages.table');
});

//Crud CAST
// C => Create data

Route::get('/cast', [CastController::class, 'index']);
Route::get('/cast/create', [CastController::class, 'create']);
Route::post('/cast', [CastController::class, 'store']);
Route::get('/cast/{cast_id}', [CastController::class, 'show']);
Route::get('/cast/{cast_id}/edit', [CastController::class, 'edit']);
Route::put('/cast/{cast_id}', [CastController::class, 'update']);
Route::delete('/cast/{cast_id}', [CastController::class, 'destroy']);

Route::resource('genres', GenreController::class);
Route::resource('films', FilmController::class);


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['genre'])->group(function () {
    Route::resource('genres', GenreController::class)->except(['show', 'index']);
});

Route::middleware(['film'])->group(function () {
    Route::resource('films', FilmController::class)->except(['show', 'index']);
});

Route::resource('genres', GenreController::class)->only(['show', 'index']);
Route::resource('films', FilmController::class)->only(['show', 'index']);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/films/{film}', [FilmController::class, 'show'])->name('films.show');
Route::post('/films/{film}/review', [FilmController::class, 'storeReview'])->name('films.storeReview');
