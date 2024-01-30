<?php

namespace App\Http\Controllers;

use App\Models\Eleves;
use App\Models\Paiement;
use Illuminate\Http\Request;

class PaiementController extends Controller
{
    //
    public function index()
    {
        $paiements = Paiement::all();
        return view('paiements.index', compact('paiements'));
    }

    public function show($id)
    {
        $paiement = Paiement::findOrFail($id);
        return view('paiements.show', compact('paiement'));
    }

    public function create()
    {
        $eleves = Eleves::all();
        return view('paiements.create', compact('eleves'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'numero' => 'required',
            'frais_ecolage' => 'required',
            'montant_paye' => 'required',
            'montant_total' => 'required',
            'eleve_id' => 'required',
        ]);

        Paiement::create($request->all());

        return redirect()->route('paiements.index')
            ->with('success', 'Paiement enregistré avec succès.');
    }

    public function edit($id)
    {
        $paiement = Paiement::findOrFail($id);
        $eleves = Eleves::all();
        return view('paiements.edit', compact('paiement', 'eleves'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'numero' => 'required',
            'frais_ecolage' => 'required',
            'montant_paye' => 'required',
            'montant_total' => 'required',
            'eleve_id' => 'required',
        ]);

        $paiement = Paiement::findOrFail($id);
        $paiement->update($request->all());

        return redirect()->route('paiements.index')
            ->with('success', 'Paiement mis à jour avec succès.');
    }

    public function destroy($id)
    {
        $paiement = Paiement::findOrFail($id);
        $paiement->delete();

        return redirect()->route('paiements.index')
            ->with('success', 'Paiement supprimé avec succès.');
    }
}
