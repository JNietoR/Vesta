<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Foundation\Application;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;
use App\Http\Controllers\DocumentoController;
use App\Models\Documento;

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
Route::get('/kanban', function () {
    return Inertia::render('Kanban');
})->middleware(['auth', 'verified'])->name('kanban');


require __DIR__ . '/auth.php';
