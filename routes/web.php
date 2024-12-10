<?php

use App\Http\Controllers\CustomController;
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

Route::get('/linkstorage', function () {
    Artisan::call('storage:link');
});
Route::get('/', [HomeController::class, 'index'])->name('index');
Route::get('/home', [HomeController::class, 'home'])->name('home.index');
Route::get('/about-us', [CustomController::class, 'aboutIndex'])->name('about-us.index');
Route::get('/testimonials', [CustomController::class, 'TestimonialsIndex'])->name('testimonials.index');
Route::get('/projects', [CustomController::class, 'ProjectsIndex'])->name('projects.index');
Route::get('/projects/details/{id}', [CustomController::class, 'ProjectsDetails'])->name('projects.details');
// Route::get('/projects/details', [CustomController::class, 'ProjectsDetails'])->name('projects.details');
Route::get('/media', [CustomController::class, 'MediaIndex'])->name('media.index');
Route::get('/media-view', [CustomController::class, 'MediaView'])->name('media.view');
Route::get('/contact-us', [CustomController::class, 'ContactUsIndex'])->name('ContactUs.index');
Route::post('/contact-us/store', [CustomController::class, 'ContactUsStore'])->name('contact_us.store');
Route::get('/buyers-guide', [CustomController::class, 'BuyersGuideIndex'])->name('buyers_guide.index');




require __DIR__.'/auth.php';
