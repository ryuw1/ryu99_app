<<<<<<< HEAD
Route::prefix('/mastas/*/')->group(function () {
    Route::get('/', [`Controller::class, 'index'])->name('*.index');
    Route::get('/create', [`Controller::class,  'create'])->name('*.create');
    //Route::post('/create', [`Controller::class, 'create'])->name('*.created');
    Route::post('/store', [`Controller::class, 'store'])->name('*.store');
    Route::get('/edit/{id}', [`Controller::class,  'edit'])->name('*.edit');
    Route::post('/update/{id}', [`Controller::class,  'update'])->name('*.update');
    Route::get('/destoy/{id}', [`Controller::class, 'destroy'])->name('*.destroy');
=======
Route::prefix('/mastas/unit/')->group(function () {
    Route::get('/', [UnitController::class, 'index'])->name('unit.index');
    Route::get('/create', [UnitController::class,  'create'])->name('unit.create');
    //Route::post('/create', [UnitController::class, 'create'])->name('unit.created');
    Route::post('/store', [UnitController::class, 'store'])->name('unit.store');
    Route::get('/edit/{id}', [UnitController::class,  'edit'])->name('unit.edit');
    Route::post('/update/{id}', [UnitController::class,  'update'])->name('unit.update');
    Route::get('/destoy/{id}', [UnitController::class, 'destroy'])->name('unit.destroy');
>>>>>>> fe2c076 (20230725 21:49)
});
