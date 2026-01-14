<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. 
| These routes are loaded by the RouteServiceProvider and all of them 
| will be assigned to the "web" middleware group.
|
*/

// Public pages
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/services', [HomeController::class, 'services'])->name('services');
Route::get('/contact', [ContactController::class, 'index'])->name('contact');
// Contact page
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.store');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard route (required by Breeze)
    Route::get('/dashboard', function () {
        // You can return a Blade view or redirect based on role
        return view('dashboard'); 
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin routes
    Route::middleware('admin')->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects');
        Route::get('/admin/project/{id}', [ProjectController::class, 'show'])->name('admin.project.details');
        // add more admin routes here
    });

    // Developer routes
    Route::middleware('developer')->group(function () {
        Route::get('/developer/dashboard', [DeveloperController::class, 'dashboard'])->name('developer.dashboard');
        Route::get('/developer/project/{id}', [DeveloperController::class, 'show'])->name('developer.project.details');
        // add more developer routes here
    });
});

require __DIR__.'/auth.php';
