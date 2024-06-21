<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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
Route::get('/', [MainController::class,'main'])->name('main');
Route::any('/contact-us', [MainController::class,'contact_us'])->name('contact_us');
Route::get('/about-us', [MainController::class,'about_us'])->name('about_us');
Route::get('/testimonials', [MainController::class,'testimonials'])->name('testimonials');
Route::get('/services', [MainController::class,'services'])->name('services');
Route::get('/gallery', [MainController::class,'gallery'])->name('gallery');