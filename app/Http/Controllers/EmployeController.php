<?php

namespace App\Http\Controllers;

use App\Models\Employe;
use Illuminate\Http\Request;

class EmployeController extends Controller
{
    //Logique pour afficher la liste des employés
    public function index()
    {
        $employes = Employe::all();
        return view('employes', compact('employes'));
    }

    // Logique pour afficher les détails d'un employé
    public function show($id){
        $employe = Employe::find($id);
        return view('employe', compact('employe'));
    }

    // Logique pour afficher le formulaire de création d'un employé
    public function create(){
        return view('create');
    }

    // Logique pour enregistrer un nouvel employé dans la base de données
    public function store(Request $request){
        $employe = new Employe;
        $employe->nom = $request->input('nom');
        $employe->prenom = $request->input('prenom');
        $employe->save();

        return redirect()->route('employes.index')->with('success', 'Employe est enregisté.');
    }

    // Logique pour afficher le formulaire de modification d'un employé
    public function edit($id){
        $employe = Employe::find($id);
        return view('edit', compact('employe'));
    }

    // Logique pour mettre à jour les informations d'un employé dans la base de données
    public function update(Request $request, $id){
        $employe = Employe::find($id);
        $employe->nom = $request->input('nom');
        $employe->prenom = $request->input('prenom');
        $employe->save();

        return redirect()->route('employes.index')->with('success', 'Employe est mis à jour.');
    }

    // Logique pour supprimer un employé de la base de données
    public function destroy($id){
        $employe = Employe::find($id);
        $employe->delete();
        return redirect()->route('employes.index')->with('success', 'Employe est supprimé.');
    }

}