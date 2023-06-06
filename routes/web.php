<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PortfolioController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Auth;
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
})->name('home');




Route::get('/blog', [BlogController::class, 'index'])->name('blogs');
Route::get('/potrolio', [PortfolioController::class, 'index'])->name('portfolio');
Route::get('/potrolio/{id}/details', [PortfolioController::class, 'details'])->name('portfolio.details');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
Route::get('/services', [ServiceController::class, 'index'])->name('services');
Route::get('/article/{id}', [ArticleController::class, 'index'])->name('article');


Auth::routes();

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index'])->name('dashboard');
    Route::resource('projects', \App\Http\Controllers\Admin\ProjectController::class);
});

