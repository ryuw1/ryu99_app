<?php
use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\Mastas\UnitController;
use App\Http\Controllers\Mastas\RelationshipController;
use App\Http\Controllers\Mastas\ProductController;
use App\Http\Controllers\Mastas\HallController;
use App\Http\Controllers\Mastas\GroupByProductController;
use App\Http\Controllers\Mastas\CrematoriumController;
use App\Http\Controllers\Mastas\HospitalController;
use App\Http\Controllers\Mastas\CompanyController;
use App\Http\Controllers\Mastas\TempleController;
use App\Http\Controllers\PostController;
use Infrastructure\EstimateInvoiceId;


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

//Route::resource('temple',TempleController::class);



//Route::get('/mastas/company/',[CompanyController::class, 'index'])->name('company.index');

Route::prefix('/mastas/hall/')->group(function () {
    Route::get('/', [HallController::class, 'index'])->name('hall.index');
    Route::get('/create', [HallController::class, 'create'])->name('hall.create');
    //Route::post('/create', [TempleController::class, 'create'])->name('temple.created');
    Route::post('/store', [HallController::class, 'store'])->name('hall.store');
    Route::get('/edit/{id}', [HallController::class, 'edit'])->name('hall.edit');
    Route::post('/update/{id}', [HallController::class, 'update'])->name('hall.update');
    Route::get('/destoy/{id}', [HallController::class, 'destroy'])->name('hall.destroy');
});
*/

Route::prefix('/mastas/temple/')->group(function () {
    Route::get('/', [TempleController::class, 'index'])->name('temple.index');
    Route::get('/create', [TempleController::class, 'create'])->name('temple.create');
    //Route::post('/create', [TempleController::class, 'create'])->name('temple.created');
    Route::post('/store', [TempleController::class, 'store'])->name('temple.store');
    Route::get('/edit/{id}', [TempleController::class, 'edit'])->name('temple.edit');
    Route::post('/update/{id}', [TempleController::class, 'update'])->name('temple.update');
    Route::get('/destoy/{id}', [TempleController::class, 'destroy'])->name('temple.destroy');
});

Route::prefix('/mastas/company/')->group(function () {
    Route::get('/', [CompanyController::class, 'index'])->name('company.index');
    Route::get('/create', [CompanyController::class,  'create'])->name('company.create');
    //Route::post('/create', [TempleController::class, 'create'])->name('temple.created');
    Route::post('/store', [CompanyController::class, 'store'])->name('company.store');
    Route::get('/edit/{id}', [CompanyController::class,  'edit'])->name('company.edit');
    Route::post('/update/{id}', [CompanyController::class,  'update'])->name('company.update');
    Route::get('/destoy/{id}', [CompanyController::class, 'destroy'])->name('company.destroy');
});

Route::prefix('/mastas/hospital/')->group(function () {
    Route::get('/', [HospitalController::class, 'index'])->name('hospital.index');
    Route::get('/create', [HospitalController::class,  'create'])->name('hospital.create');
    //Route::post('/create', [TempleController::class, 'create'])->name('temple.created');
    Route::post('/store', [HospitalController::class, 'store'])->name('hospital.store');
    Route::get('/edit/{id}', [HospitalController::class,  'edit'])->name('hospital.edit');
    Route::post('/update/{id}', [HospitalController::class,  'update'])->name('hospital.update');
    Route::get('/destoy/{id}', [HospitalController::class, 'destroy'])->name('hospital.destroy');
});
Route::prefix('/mastas/crematorium/')->group(function () {
    Route::get('/', [CrematoriumController::class, 'index'])->name('crematorium.index');
    Route::get('/create', [CrematoriumController::class,  'create'])->name('crematorium.create');
    //Route::post('/create', [CrematoriumController::class, 'create'])->name('crematorium.created');
    Route::post('/store', [CrematoriumController::class, 'store'])->name('crematorium.store');
    Route::get('/edit/{id}', [CrematoriumController::class,  'edit'])->name('crematorium.edit');
    Route::post('/update/{id}', [CrematoriumController::class,  'update'])->name('crematorium.update');
    Route::get('/destoy/{id}', [CrematoriumController::class, 'destroy'])->name('crematorium.destroy');
});
Route::prefix('/mastas/groupbyproduct/')->group(function () {
    Route::get('/', [GroupByProductController::class, 'index'])->name('groupByProduct.index');
    Route::get('/create', [GroupByProductController::class,  'create'])->name('groupByProduct.create');
    //Route::post('/create', [GroupByProductController::class, 'create'])->name('groupByProduct.created');
    Route::post('/store', [GroupByProductController::class, 'store'])->name('groupByProduct.store');
    Route::get('/edit/{id}', [GroupByProductController::class,  'edit'])->name('groupByProduct.edit');
    Route::post('/update/{id}', [GroupByProductController::class,  'update'])->name('groupByProduct.update');
    Route::get('/destoy/{id}', [GroupByProductController::class, 'destroy'])->name('groupByProduct.destroy');
});
Route::prefix('/mastas/hall/')->group(function () {
    Route::get('/', [HallController::class, 'index'])->name('hall.index');
    Route::get('/create', [HallController::class,  'create'])->name('hall.create');
    //Route::post('/create', [HallController::class, 'create'])->name('hall.created');
    Route::post('/store', [HallController::class, 'store'])->name('hall.store');
    Route::get('/edit/{id}', [HallController::class,  'edit'])->name('hall.edit');
    Route::post('/update/{id}', [HallController::class,  'update'])->name('hall.update');
    Route::get('/destoy/{id}', [HallController::class, 'destroy'])->name('hall.destroy');
});
Route::prefix('/mastas/product/')->group(function () {
    Route::get('/', [ProductController::class, 'index'])->name('product.index');
    Route::get('/create', [ProductController::class,  'create'])->name('product.create');
    //Route::post('/create', [ProductController::class, 'create'])->name('product.created');
    Route::post('/store', [ProductController::class, 'store'])->name('product.store');
    Route::get('/edit/{id}', [ProductController::class,  'edit'])->name('product.edit');
    Route::post('/update/{id}', [ProductController::class,  'update'])->name('product.update');
    Route::get('/destoy/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
});
Route::prefix('/mastas/relationship/')->group(function () {
    Route::get('/', [RelationshipController::class, 'index'])->name('relationship.index');
    Route::get('/create', [RelationshipController::class,  'create'])->name('relationship.create');
    //Route::post('/create', [RelationshipController::class, 'create'])->name('relationship.created');
    Route::post('/store', [RelationshipController::class, 'store'])->name('relationship.store');
    Route::get('/edit/{id}', [RelationshipController::class,  'edit'])->name('relationship.edit');
    Route::post('/update/{id}', [RelationshipController::class,  'update'])->name('relationship.update');
    Route::get('/destoy/{id}', [RelationshipController::class, 'destroy'])->name('relationship.destroy');
});
Route::prefix('/mastas/unit/')->group(function () {
    Route::get('/', [UnitController::class, 'index'])->name('unit.index');
    Route::get('/create', [UnitController::class,  'create'])->name('unit.create');
    //Route::post('/create', [UnitController::class, 'create'])->name('unit.created');
    Route::post('/store', [UnitController::class, 'store'])->name('unit.store');
    Route::get('/edit/{id}', [UnitController::class,  'edit'])->name('unit.edit');
    Route::post('/update/{id}', [UnitController::class,  'update'])->name('unit.update');
    Route::get('/destoy/{id}', [UnitController::class, 'destroy'])->name('unit.destroy');
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