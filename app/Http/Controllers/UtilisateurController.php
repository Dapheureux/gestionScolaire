<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Utilisateur;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UtilisateurController extends Controller
{
    public function showLoginForm()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'login' => 'required|string',
            'password' => 'required|string',
        ]);
    
        if (Auth::attempt($request->only('login', 'password'))) {
            // Authentification réussie
            return redirect()->route('Home');
        } else {
            // Échec de l'authentification
            return redirect()->back()->with('error', 'Identifiants incorrects');
        }
    }


    public function showRegistrationForm()
    {
        return view('auth.register');
    }

    public function register(Request $request)
{
    $request->validate([
        'type' => 'required',
        'login' => 'required|unique:utilisateurs',
        'password' => 'required',
    ]);

    // Vérification supplémentaire pour s'assurer que 'password' est présent dans les données de la requête
    if (!$request->has('password')) {
        return redirect()->back()->withErrors(['password' => 'Le champ mot de passe est requis.']);
    }
        // Crée un nouvel utilisateur avec mot de passe haché
        $utilisateur = Utilisateur::create([
            'type' => $request->type,
            'login' => $request->login,
            'password' => bcrypt($request->password),
        ]);

        // Connecte automatiquement le nouvel utilisateur après l'enregistrement
        Auth::login($utilisateur);

        return redirect()->route('Home')->with('success', 'Inscription réussie.');
    }

}



