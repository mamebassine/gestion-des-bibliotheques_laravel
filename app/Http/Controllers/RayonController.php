<?php

namespace App\Http\Controllers;

use App\Models\Rayon;
use Illuminate\Http\Request;

class RayonController extends Controller
{
   
    public function index()
    {
        $rayons = Rayon::all();
        return view('rayons.index', compact('rayons'));
    }

    public function create()
    {
        return view('rayons.create');
    }
    public function store(Request $request)
{
    $request->validate([
        'libelle' => 'required|string|max:255',
        'partie' => 'required|string|max:255', // Ajoutez la validation pour 'partie'
    ]);

    Rayon::create([
        'libelle' => $request->input('libelle'),
        'partie' => $request->input('partie'),
    ]);

    return redirect()->route('rayons.index')->with('success', 'Rayon créé avec succès.');
}

public function destroy($id)
{
    $rayon = Rayon::findOrFail($id);
    $rayon->delete();

    return redirect()->route('rayons.index')->with('success', 'Rayon supprimé avec succès');
}
public function edit($id)
{
    $rayon = Rayon::findOrFail($id);
    return view('rayons.edit', compact('rayon'));
}
public function update(Request $request, $id)
{
    $rayon = Rayon::findOrFail($id);
    
    $validatedData = $request->validate([
        'libelle' => 'required|string|max:255',
        'partie' => 'required|string|max:255',
    ]);
    
    $rayon->update($validatedData);
    
    return redirect()->route('rayons.index')->with('success', 'Rayon updated successfully');
}
}
