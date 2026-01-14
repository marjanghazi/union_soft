<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DeveloperController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;

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

// Contact page routes
Route::get('/contact', [ContactController::class, 'showForm'])->name('contact');
Route::post('/contact', [ContactController::class, 'submitForm'])->name('contact.store');

// Products Routes
Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/category/{category}', [ProductsController::class, 'category'])->name('products.category');
Route::get('/products/search', [ProductsController::class, 'search'])->name('products.search');
Route::get('/products/{slug}', [ProductsController::class, 'show'])->name('products.show');

// Authenticated routes
Route::middleware(['auth', 'verified'])->group(function () {

    // Dashboard route - Redirects based on user role
    Route::get('/dashboard', function () {
        $user = Auth::user();

        if ($user->isAdmin()) {
            return redirect()->route('admin.dashboard');
        } elseif ($user->isDeveloper()) {
            return redirect()->route('developer.dashboard');
        } else {
            // Default dashboard for regular users
            return view('dashboard');
        }
    })->name('dashboard');

    // Profile routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin routes - protected by role middleware
    Route::middleware(['role:admin'])->group(function () {
        Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
        Route::get('/admin/projects', [ProjectController::class, 'index'])->name('admin.projects');
        Route::get('/admin/project/{id}', [ProjectController::class, 'show'])->name('admin.project.details');
        // Add more admin routes here
    });

    // Developer routes - protected by role middleware  
    Route::middleware(['role:developer'])->group(function () {
        Route::get('/developer/dashboard', [DeveloperController::class, 'dashboard'])->name('developer.dashboard');
        Route::get('/developer/project/{id}', [DeveloperController::class, 'show'])->name('developer.project.details');
        // Add more developer routes here
    });
});

require __DIR__ . '/auth.php';