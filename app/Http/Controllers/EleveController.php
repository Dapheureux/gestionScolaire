<?php

namespace App\Http\Controllers;

use App\Models\Classe;
use App\Models\Employe;
use App\Models\Eleves;
use Illuminate\Http\Request;

class EleveController extends Controller
{
    //Logique pour afficher la liste des eleves
    public function index()
    {
        $eleves = Eleves::all(); // Supposons que vous avez un modèle Eleve
        return view('Eleves', compact('eleves'));
    }
    

    // Logique pour afficher les détails d'un élève
    public function show() {
        // Récupérer les élèves depuis la base de données
        $eleves = Eleves::all();
    
        // Passer les élèves à la vue
        return view('Eleves', ['eleves' => $eleves]);
    }
    
    // Logique pour afficher le formulaire de création d'un élève
    public function create(){
        $classes = Classe::all();
        $employes = Employe::all();
        return view('eleves.create', compact('classes', 'employes'));
    }
    


    // Logique pour enregistrer un nouvel élève dans la base de données
    public function store(Request $request)
    {
        // Validation des données du formulaire (ajoutez les règles de validation appropriées)
        $request->validate([
            'nom' => 'required',
            'prenom' => 'required',
            'date_naissance' => 'required|date',
            'lieu_naissance' => 'required',
            'adresse' => 'required', // Assurez-vous que 'adresse' correspond au champ approprié
            'telephone' => 'required',
            'sexe' => 'required',
            'email' => 'required|email',
            'nationalite' => 'required',
            'classe_id' => 'required',
            'employe_id' => 'required',
            'photo' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ajoutez des règles pour le champ 'photo'
        ]);
    
       // Traitement du fichier photo
    $photoPath = null;
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('chemin_vers_dossier_photos', 'public');
    }

    // Création d'un nouvel élève avec les données validées
    $eleve = Eleves::create([
        'nom' => $request->input('nom'),
        'prenom' => $request->input('prenom'),
        'date_naissance' => $request->input('date_naissance'),
        'lieu_naissance' => $request->input('lieu_naissance'),
        'adresse' => $request->input('adresse'),
        'telephone' => $request->input('telephone'),
        'sexe' => $request->input('sexe'),
        'email' => $request->input('email'),
        'nationalite' => $request->input('nationalite'),
        'classe_id' => $request->input('classe_id'),
        'employe_id' => $request->input('employe_id'),
        'photo' => $photoPath, // Enregistrez le chemin du fichier photo
    ]);

    // Redirection avec un message de succès
    return back()->with('message', 'La classe ajoutée avec succès');
    }
    
    // Logique pour afficher le formulaire de modification d'un élève

    public function edit($id){
        $eleve = Eleves::find($id);
        $classes = Classe::all();
        $employes = Employe::all();
    
        // Assurez-vous de vérifier si l'élève a été trouvé avant de le passer à la vue
        if ($eleve) {
            return view('eleves.edit', compact('eleve', 'classes', 'employes'));
        } else {
            // Gérez le cas où l'élève n'est pas trouvé (vous pouvez rediriger ou afficher un message d'erreur)
            return redirect()->route('eleves.index')->with('error', 'Élève non trouvé.');
        }
    }


    // Logique pour mettre à jour les informations d'un élève dans la base de données
    public function update(Request $request, $id){
        $eleve = Eleves::find($id);
        $eleve->nom = $request->input('nom');
        $eleve->prenom = $request->input('prenom');
        $eleve->date_naissance = $request->input('date_naissance');
        $eleve->lieu_naissance = $request->input('lieu_naissance');
        $eleve->adresse = $request->input('adresse');
        $eleve->telephone = $request->input('telephone');
        $eleve->sexe = $request->input('sexe');
        $eleve->email = $request->input('email');
        $eleve->nationalite = $request->input('nationalite');
        $eleve->photo = $request->input('photo');
        $eleve->classe_id = $request->input('classe_id');
        $eleve->employe_id = $request->input('employe_id');
        $eleve->save();

        return redirect()->route('Eleves.index')->with('success', 'Informations de l élève mises à jour avec succès');
    }

    // Logique pour supprimer un élève de la base de données
    public function destroy($id){
        $eleve = Eleves::find($id);
        $eleve->delete();
        return redirect()->route('eleves.index')->with('success', 'Eleve supprimé avec sucès');
    }
}
