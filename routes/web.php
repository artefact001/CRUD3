<?php
use App\Http\Controllers\RayonController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LivreController;
use App\Http\Controllers\CategorieController;

// use App\Http\Controllers\RayonController;

Route::resource('rayons', RayonController::class);


Route::get('/', function () {
    return view('welcome');
});



Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');



// rayon routes
Route::prefix('rayons')->group(function () {
    Route::get('/creer', [RayonController::class, 'creer'])->name('rayons.creer');
    Route::post('/', [RayonController::class, 'stocker'])->name('rayons.store');
    Route::get('/{id}', [RayonController::class, 'afficher'])->name('rayons.show');
    Route::get('/{id}/modifier', [RayonController::class, 'modifier'])->name('rayons.edit');
    Route::put('/{id}', [RayonController::class, 'mettreAJour'])->name('rayons.update');
    Route::delete('/{id}', [RayonController::class, 'supprimer'])->name('rayons.destroy');
});



Route::resource('categories', CategorieController::class);

