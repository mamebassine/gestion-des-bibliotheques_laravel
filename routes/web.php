<?php
use App\Models\Administrateur;
use App\Http\Controllers\AdministrateurController;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LivreController;
use App\Http\Controllers\RayonController;
use App\Http\Controllers\CategorieController;
use App\Http\Controllers\DashboardController;

// Routes pour la gestion des livres

Route::get('/', [LivreController::class, 'index'])->name('livres.index'); // Affiche la liste des livres
Route::get('/livres', [LivreController::class, 'index'])->name('livres.index'); // Affiche la liste des livres
Route::get('/livres/create', [LivreController::class, 'create'])->name('livres.create'); // Affiche le formulaire de création d'un livre
Route::post('/livres', [LivreController::class, 'store'])->name('livres.store'); // Enregistre un nouveau livre
Route::get('/livres/{livre}', [LivreController::class, 'show'])->name('livres.show'); // Affiche les détails d'un livre spécifique
Route::get('/livres/{livre}/edit', [LivreController::class, 'edit'])->name('livres.edit'); // Affiche le formulaire d'édition d'un livre
Route::put('/livres/{livre}', [LivreController::class, 'update'])->name('livres.update'); // Met à jour un livre existant
Route::delete('/livres/{livre}', [LivreController::class, 'destroy'])->name('livres.destroy'); // Supprime un livre


Route::get('livres/recherche', [LivreController::class, 'recherche'])->name('livres.recherche');



// Routes pour la gestion des catégories
Route::get('/categories', [CategorieController::class, 'index'])->name('categories.index'); // Route pour afficher la liste des catégories
Route::get('/categories/create', [CategorieController::class, 'create'])->name('categories.create'); // Route pour afficher le formulaire de création de catégorie
Route::post('/categories', [CategorieController::class, 'store'])->name('categories.store'); // Route pour enregistrer une nouvelle catégorie
Route::get('/categories/{Categorie}/edit', [CategorieController::class, 'edit'])->name('categories.edit'); // Route pour afficher le formulaire de modification d'une catégorie
Route::put('/categories/{Categorie}', [CategorieController::class, 'update'])->name('categories.update'); // Route pour mettre à jour une catégorie

Route::delete('/categories/{Categorie}', [CategorieController::class, 'destroy'])->name('categories.destroy'); // Route pour supprimer une catégorie
Route::get('/categories/{categorie}/delete', [categorieController::class, 'delete'])->name('categories.delete'); // Route pour afficher la confirmation de suppression d'un rayon


// Routes pour la gestion des rayons
Route::get('/rayons', [RayonController::class, 'index'])->name('rayons.index'); // Route pour afficher la liste des rayons
Route::get('/rayons/create', [RayonController::class, 'create'])->name('rayons.create'); // Route pour afficher le formulaire de création d'un rayon
Route::post('/rayons', [RayonController::class, 'store'])->name('rayons.store'); // Route pour enregistrer un nouveau rayon
Route::get('/rayons/{rayon}/edit', [RayonController::class, 'edit'])->name('rayons.edit'); // Route pour afficher le formulaire de modification d'un rayon
Route::put('/rayons/{rayon}', [RayonController::class, 'update'])->name('rayons.update'); // Route pour mettre à jour un rayon

Route::delete('/rayons/{id}', [RayonController::class, 'destroy'])->name('rayons.destroy'); // Route pour supprimer un rayon
Route::get('/rayons/{rayon}/delete', [RayonController::class, 'delete'])->name('rayons.delete'); // Route pour afficher la confirmation de suppression d'un rayon

// AUTHENTIFICATIONS

// Route pour l'inscription
Route::get('/register', [AdministrateurController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [AdministrateurController::class, 'register']);

// Route pour la connexion
Route::get('/login', [AdministrateurController::class, 'login'])->name('login');
Route::post('/authenticate', [AdministrateurController::class, 'authenticate'])->name('authenticate');

Route::post('/authentification', [AdministrateurController::class, 'authentification'])->name('authentification');
// Route pour le tableau de bord, nécessite une authentification
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
// Route pour la déconnexion
//Route::get('/logout', [AdministrateurController::class, 'logout'])->name('logout');

Route::get('/logout', [AdministrateurController::class, 'logout'])->name('logout');







// dashbord
Route::get('/administrateurs/dashboard', [AdministrateurController::class, 'dashboard'])->name('administrateurs.dashboard');


// Route pour la page d'accueil
Route::get('/livres', [LivreController::class, 'index'])->name('livres.index');

// Route pour la connexion des administrateurs
Route::get('/administrateurs/login', [AdministrateurController::class, 'login'])->name('administrateurs.login');

// Route pour l'ajout de livre
Route::get('/livres/create', [LivreController::class, 'create'])->name('livres.create');

// Route pour afficher les détails d'un livre
Route::get('/livres/{id}', [LivreController::class, 'show'])->name('livres.show');

// Route pour modifier un livre
Route::get('/livres/{id}/edit', [LivreController::class, 'edit'])->name('livres.edit');
// pour recherche titre livre
Route::get('/recherche', [LivreController::class, 'recherche'])->name('livres.recherche');









































