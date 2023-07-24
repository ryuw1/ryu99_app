Route::prefix('/mastas/*/')->group(function () {
    Route::get('/', [`Controller::class, 'index'])->name('*.index');
    Route::get('/create', [`Controller::class,  'create'])->name('*.create');
    //Route::post('/create', [`Controller::class, 'create'])->name('*.created');
    Route::post('/store', [`Controller::class, 'store'])->name('*.store');
    Route::get('/edit/{id}', [`Controller::class,  'edit'])->name('*.edit');
    Route::post('/update/{id}', [`Controller::class,  'update'])->name('*.update');
    Route::get('/destoy/{id}', [`Controller::class, 'destroy'])->name('*.destroy');
});
