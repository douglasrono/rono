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



Auth::routes();

Route::get('/', [App\Http\Controllers\PageController::class, 'index'])->name('index');

Route::get('/about', [App\Http\Controllers\PageController::class, 'about'])->name('about');

Route::get('/services', [App\Http\Controllers\PageController::class, 'services'])->name('services');

Route::get('/contact', [App\Http\Controllers\PageController::class, 'contact'])->name('contact');

Route::get('/portfolio', [App\Http\Controllers\PageController::class, 'portfolio'])->name('portfolio');

Route::get('/testimonial', [App\Http\Controllers\PageController::class, 'testimonial'])->name('testimonial');
Route::get('/skills', [App\Http\Controllers\PageController::class, 'skills'])->name('skills');


