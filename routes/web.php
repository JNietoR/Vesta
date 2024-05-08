<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DocumentoController;
use App\Models\Documento;
use App\Http\Controllers\BoardController;
use App\Http\Controllers\CardListController;
use App\Http\Controllers\CardController;

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

Route::get('/', function () {
    return Inertia::render('Welcome', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/Nosotros', function () {
    return Inertia::render('Nosotros', [
        'canLogin' => Route::has('login'),
        'canRegister' => Route::has('register'),
        'laravelVersion' => Application::VERSION,
        'phpVersion' => PHP_VERSION,
    ]);
});

Route::get('/dashboard', function () {
    return Inertia::render('Dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


//Documnetos

Route::get('/documentos', [DocumentoController::class, 'index'])
    ->middleware(['auth', 'verified'])
    ->name('documentos');

Route::post('/documentos', [DocumentoController::class, 'store'])->name('StoreDocumento');

Route::get('/documentos/create', function () {
    return Inertia::render('documentos/create');
})->middleware(['auth', 'verified'])->name('CrearDocumento');

Route::put('/documentos/{id}/toggle-favorito', [DocumentoController::class, 'toggleFavorito'])->name('documentos.toggle-favorito');

//Route::get('/documentos/{documento}', function ($documento) {
//    return Inertia::render('ShowDocumento', compact('documento'));
//})->middleware(['auth', 'verified'])->name('ShowDocumento');

Route::get('/documentos/{documento}/edit', function ($documentoId) {
    $documento = Documento::findOrFail($documentoId);
    return Inertia::render('documentos/edit', ['documento' => $documento]);
})->middleware(['auth', 'verified'])->name('EditDocumento');

Route::put('/documentos/{documento}', [DocumentoController::class, 'update'])->name('UpdateDocumento');

Route::delete('/documentos/{documento}', [DocumentoController::class, 'destroy'])->name('DestroyDocumento');

// Possit

Route::get('/possit', function () {
    return Inertia::render('Possit');
})->middleware(['auth', 'verified'])->name('possit');


// Profile
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::resource('documento', DocumentoController::class);
});




// Kanban

Route::group(['middleware' => ['auth', 'verified']], function() {
    Route::get('/boards/{board}/{card?}', [BoardController::class, 'show'])->name('boards.show');
    Route::put('/boards/{board}', [BoardController::class, 'update'])->name('boards.update');
    Route::get('/boards', [BoardController::class, 'index'])->name('boards');
    Route::post('/boards', [BoardController::class, 'store'])->name('boards.store');
    Route::delete('/boards/{board}',[BoardController::class, 'destroy'])->name('boards.destroy');

    Route::post('/boards/{board}/lists', [CardListController::class, 'store'])->name('cardLists.store');
    Route::post('/cards', [CardController::class, 'store'])->name('cards.store');
    Route::put('/cards/{card}', [CardController::class, 'update'])->name('cards.update');
    Route::put('/cards/{card}/move', [CardController::class, 'move'])->name('cards.move');
    Route::delete('/cards/{card}', [CardController::class, 'destroy'])->name('cards.destroy');
    Route::delete('/cardlist/{list}', [CardListController::class, 'destroy'])->name('cardLists.destroy');
});

// stripe

Route::get('/dona', 'App\Http\Controllers\StripeController@index')->name('dona');
Route::post('/checkout', 'App\Http\Controllers\StripeController@checkout')->name('checkout');
Route::get('/success', 'App\Http\Controllers\StripeController@success')->name('success');

require __DIR__ . '/auth.php';
