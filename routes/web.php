<?php

use App\Http\Controllers\ArticleController;
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
    return view('home');
});

Route::get('/about', function () {
    return view('about');
});

// ArticleController routes for index and show
Route::controller(ArticleController::class)
    ->group(function () {
        Route::get('/articles', 'index')->name('articles.index');
        Route::get('/article/{article}', 'show')->name('articles.show');
    });
