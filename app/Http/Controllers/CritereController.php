<?php

namespace App\Http\Controllers;

use App\Models\RatingCriterion;
use Illuminate\Http\Request;

class CritereController extends Controller
{
    public function store(Request $request)
    {
        // Validation des données
        $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:255',
        ]);

        // Création d'une nouvelle instance de Critere avec les données du formulaire
        $critere = new RatingCriterion();
        $critere->name = $request->name;
        $critere->description = $request->description;

        // Enregistrement du critère dans la base de données
        $critere->save();

        // Redirection avec un message de succès
        return redirect()->route('CritereList')->with('success', 'Critère ajouté avec succès !');
    }
    public function RecupCritere()
    {
        // Récupérer tous les critères depuis la base de données
        $criteres = RatingCriterion::all();

        // Passer les critères à la vue pour l'affichage
        return view('CritereList', ['criteres' => $criteres]);
    }
    public function destroy($id)
    {
        // Récupérer le critère à supprimer
        $critere = RatingCriterion::findOrFail($id);

        // Supprimer le critère de la base de données
        $critere->delete();

        // Rediriger avec un message de succès
        return redirect()->route('CritereList')->with('success', 'Critère supprimé avec succès !');
    }
}
