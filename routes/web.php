<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\LivreController;

// Route pour la page d'accueil
Route::get('/', function () {
    return view('welcome'); // Retourne la vue 'welcome'
});

// Routes pour la gestion des catégories
Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index'); // Route pour afficher la liste des catégories
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create'); // Route pour afficher le formulaire de création de catégorie
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store'); // Route pour enregistrer une nouvelle catégorie
Route::get('/categories/{Categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit'); // Route pour afficher le formulaire de modification d'une catégorie
Route::put('/categories/{Categorie}', [CategorieController::class, 'update'])->name('categories.update'); // Route pour mettre à jour une catégorie
Route::delete('/categories/{Categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy'); // Route pour supprimer une catégorie

// Routes pour la gestion des rayons
Route::get('/rayons', [RayonController::class, 'index'])->name('rayons.index'); // Route pour afficher la liste des rayons
Route::get('/rayons/create', [RayonController::class, 'create'])->name('rayons.create'); // Route pour afficher le formulaire de création d'un rayon
Route::post('/rayons', [RayonController::class, 'store'])->name('rayons.store'); // Route pour enregistrer un nouveau rayon
Route::get('/rayons/{rayon}/edit', [RayonController::class, 'edit'])->name('rayons.edit'); // Route pour afficher le formulaire de modification d'un rayon
Route::put('/rayons/{rayon}', [RayonController::class, 'update'])->name('rayons.update'); // Route pour mettre à jour un rayon
Route::delete('/rayons/{id}', [RayonController::class, 'destroy'])->name('rayons.destroy'); // Route pour supprimer un rayon

Route::get('/rayons/{rayon}/delete', [RayonController::class, 'delete'])->name('rayons.delete'); // Route pour afficher la confirmation de suppression d'un rayon



// Routes pour la gestion des livres
Route::get('/livres', [LivreController::class, 'index'])->name('livres.index'); // Affiche la liste des livres
Route::get('/livres/create', [LivreController::class, 'create'])->name('livres.create'); // Affiche le formulaire de création d'un livre
Route::post('/livres', [LivreController::class, 'store'])->name('livres.store'); // Enregistre un nouveau livre
Route::get('/livres/{livre}', [LivreController::class, 'show'])->name('livres.show'); // Affiche les détails d'un livre spécifique
Route::get('/livres/{livre}/edit', [LivreController::class, 'edit'])->name('livres.edit'); // Affiche le formulaire d'édition d'un livre
Route::put('/livres/{livre}', [LivreController::class, 'update'])->name('livres.update'); // Met à jour un livre existant
Route::delete('/livres/{livre}', [LivreController::class, 'destroy'])->name('livres.destroy'); // Supprime un livre


















// use Illuminate\Support\Facades\Route; // Importation de la façade Route pour définir les routes
// use App\Http\Controllers\CategorieController; // Importation du contrôleur CategorieController
// use App\Http\Controllers\RayonController; // Importation du contrôleur RayonController
// use App\Http\Controllers\LivreController; // Importation du contrôleur LivreController

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index');
// Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create');
// Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store');
// Route::get('/categories/{Categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit');
// Route::put('/categories/{Categorie}', [CategorieController::class, 'update'])->name('categories.update');
// Route::delete('/categories/{Categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy');



// Route::get('/rayons', [RayonController::class, 'index'])->name('rayons.index');

// Route::get('/rayons/create', [RayonController::class, 'create'])->name('rayons.create');
// Route::post('/rayons', [RayonController::class, 'store'])->name('rayons.store');

// Route::get('/rayons/{rayon}/edit', [RayonController::class, 'edit'])->name('rayons.edit');


// Route::put('/rayons/{rayon}', [RayonController::class, 'update'])->name('rayons.update');
// Route::delete('/rayons/{id}', [RayonController::class, 'destroy'])->name('rayons.destroy');


// Route::get('/rayons/{rayon}/delete', [RayonController::class, 'delete'])->name('rayons.delete');















