<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Mastas\TempleController;
use App\Http\Controllers\PostController;


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
*/
//Route::resource('temple',TempleController::class);


//Route::get('/temple',[TempleController::class, 'index'])->name('temple.index');

Route::prefix('/mastas/temple/')->group(function () {
    Route::get('/', [TempleController::class, 'index'])->name('temple.index');
    Route::get('/create', [TempleController::class, 'create'])->name('temple.create');
    //Route::post('/create', [TempleController::class, 'create'])->name('temple.created');
    Route::post('/store', [TempleController::class, 'store'])->name('temple.store');
    Route::get('/edit/{id}', [TempleController::class, 'edit'])->name('temple.edit');
    Route::post('/update/{id}', [TempleController::class, 'update'])->name('temple.update');
    Route::get('/destoy/{id}', [TempleController::class, 'destroy'])->name('temple.destroy');
});

/*
//20230713 resourceとホワイトリストとを使った方法
//Route::resource('temple', 'TempleController', ['only' => ['index', 'create', 'edit', 'store', 'destroy']]);

/*
Route::prefix('/mastas/temple')->group(function() {
        Route::get('search', [UserController::class, 'search'])->name('temple.search');
      
        Route::get('/index', [TempleController::class, 'index'])->name('temple.index');
        Route::get('/show', [TempleController::class, 'show'])->name('temple.show');
            Route::post('/store/{id}', [TempleController::class, 'store'])->name('temple.store');
            Route::get('/update/{id}', [TempleController::class, 'update'])->name('temple.update');
            Route::delete('/destroy/{id}', [TempleController::class, 'destroy'])->name('temple.destroy');
    });
    */
    //require __DIR__.'/auth.php';s