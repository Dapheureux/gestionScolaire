<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use Illuminate\Http\Request;

class ClasseController extends Controller
{
    public function index()
    {
        $classes = Classe::all();
        return view('Classes', compact('classes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'nom' => 'required|unique:classes'
        ]);
    
        Classe::create($request->all());
    
        // Redirection vers la page précédente
        return back()->with('message', 'La classe ajoutée avec succès');
    }
    

    public function edit(Classe $classe)
{
    return view('classes.edit', compact('classe'));
}

public function update(Request $request, Classe $classe)
{
    $request->validate([
        'nom' => 'required|unique:classes,nom,' . $classe->id,
    ]);

    $classe->update($request->all());

    return redirect()->route('classes.index')->with('success', 'Classe mise à jour avec succès.');
}

    public function destroy(Classe $classe)
{
    $classe->delete();

    return response()->json(['success' => true]);
}
}
