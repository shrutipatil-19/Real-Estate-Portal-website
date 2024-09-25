<?php

use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\Home\HomeController;
use App\Http\Controllers\ProfileController;
use App\Models\AboutUs;
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

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/about-us', [AboutUsController::class, 'aboutIndex'])->name('about-us.index');
Route::get('/testimonials', [AboutUsController::class, 'TestimonialsIndex'])->name('testimonials.index');


require __DIR__.'/auth.php';
