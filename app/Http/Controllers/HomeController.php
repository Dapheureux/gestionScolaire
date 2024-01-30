<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Affiche la page d'accueil.
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        // Tu peux ajouter ici le contenu que tu veux afficher sur la page d'accueil
        return view('Home');
    }
}
