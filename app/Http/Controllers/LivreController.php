<?php

// app/Http/Controllers/LivreController.php

namespace App\Http\Controllers;

use App\Models\Livre;
use App\Models\Rayon;
use App\Models\Categorie;
use Illuminate\Http\Request;

class LivreController extends Controller
{
    // Affiche la liste des livres
    public function index()
    {
        $livres = Livre::with('rayon', 'categorie')->get();
        return view('livres.index', compact('livres'));
    }

    // Affiche le formulaire de création d'un livre
    public function create()
    {
        $rayons = Rayon::all();
        $categories = Categorie::all();
        return view('livres.create', compact('rayons', 'categories'));
    }

    

    // Enregistre un nouveau livre
    public function store(Request $request)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'date_de_publication' => 'required|date',
            'nombre_de_page' => 'required|integer',
            'auteur' => 'required|string|max:255',
            'isbn' => 'required|string|max:255|unique:livres',
            'editeur' => 'required|string|max:255',
            'id_rayon' => 'required|exists:rayons,id',
            'id_categorie' => 'required|exists:categories,id',
        ]);

        Livre::create($validated);

        return redirect()->route('livres.index')->with('success', 'Livre créé avec succès');
    }

    // Affiche un livre spécifique
    public function show(Livre $livre)
    {
        return view('livres.show', compact('livre'));
    }

    // Affiche le formulaire d'édition d'un livre
    public function edit(Livre $livre)
    {
        $rayons = Rayon::all();
        $categories = Categorie::all();
        return view('livres.edit', compact('livre', 'rayons', 'categories'));
    }

    // Met à jour un livre existant
    public function update(Request $request, Livre $livre)
    {
        $validated = $request->validate([
            'titre' => 'required|string|max:255',
            'image' => 'nullable|string|max:255',
            'date_de_publication' => 'required|date',
            'nombre_de_page' => 'required|integer',
            'auteur' => 'required|string|max:255',
            'isbn' => 'required|string|max:255|unique:livres,isbn,' . $livre->id,
            'editeur' => 'required|string|max:255',
            'id_rayon' => 'required|exists:rayons,id',
            'id_categorie' => 'required|exists:categories,id',
        ]);

        $livre->update($validated);

        return redirect()->route('livres.index')->with('success', 'Livre mis à jour avec succès');
    }

    // Supprime un livre
    public function destroy(Livre $livre)
    {
        $livre->delete();

        return redirect()->route('livres.index')->with('success', 'Livre supprimé avec succès');
    }
}
