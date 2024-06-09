<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorie;

class CategorieController extends Controller
{
     public function index()
        {
            $categories = Categorie::all();
            return view('categories.index', compact('categories'));
        }
    
        public function create()
        {
            return view('categories.create');
        }
    
        public function store(Request $request)
        {
            $request->validate([
                'libelle' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);
    
            Categorie::create($request->all());
    
            return redirect()->route('categories.index')->with('success', 'Catégorie ajoutée avec succès.');
        }
    
        public function edit(Categorie $Categorie)
        {
            return view('categories.edit', compact('Categorie'));
        }
    
        public function update(Request $request, Categorie $Categorie)
        {
            $request->validate([
                'libelle' => 'required|string|max:255',
                'description' => 'nullable|string',
            ]);
    
            $Categorie->update($request->all());
    
            return redirect()->route('categories.index')->with('success', 'Catégorie mise à jour avec succès.');
        }
    
        public function destroy(Categorie $Categorie)
        {
            if ($Categorie->books()->exists()) {
                return redirect()->route('categories.index')->with('error', 'Des livres sont liés à cette catégorie. Vous ne pouvez pas la supprimer.');
            }
    
            $Categorie->delete();
    
            return redirect()->route('categories.index')->with('success', 'Catégorie supprimée avec succès.');
        }
    }
    



