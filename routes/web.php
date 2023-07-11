<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Mastas\TempleController;
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
/*
Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', function () {
    return view('demoForm');
});

Route::get('/temple',[TempleController::class, 'index']);

Route::prefix('temple/{id}')->group(function () {
    Route::get('/', [TempleController::class, 'index'])->name('temple.index');
    Route::post('/temple/{id}', [TempleController::class, 'edit'])->name('temple.edit');
    Route::patch('/temple/{id}', [TempleController::class, 'update'])->name('temple.update');
    Route::delete('/temple/{id}', [TempleController::class, 'destroy'])->name('temple.destroy');
});
*/
Route::prefix('/mastas/temple')->group(function() {
    // temple/search
        Route::get('search', [UserController::class, 'search'])->name('temple.search');
      
        Route::get('/index', [TempleController::class, 'index'])->name('temple.index');
        Route::get('/show', [TempleController::class, 'show'])->name('temple.show');
            Route::post('/store/{id}', [TempleController::class, 'store'])->name('temple.store');
            Route::get('/update/{id}', [TempleController::class, 'update'])->name('temple.update');
            Route::delete('/destroy/{id}', [TempleController::class, 'destroy'])->name('temple.destroy');
    });

//require __DIR__.'/auth.php';s