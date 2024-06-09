<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;

Route::get('/', function () {
    return view('welcome');
});






Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
Route::get('/categories/{Categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{Categorie}', [CategorieController::class, 'update'])->name('categories.update');
Route::delete('/categories/{Categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');


