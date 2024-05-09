<?php

namespace App\Http\Controllers;

use App\Models\University;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\RatingCriterion;
use Illuminate\Http\RedirectResponse;
use App\Models\Rating;


class UniversityController extends Controller
{
    /**
     * Store a newly created university in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

public function store(Request $request): RedirectResponse
{
    $this->validate($request, [
        'name' => 'required|string|max:255',
        'website' => 'required|string|url',
        'logo' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Validation du logo
    ]);

    // Create a new Universite instance
    $universite = new University;
    $universite->name = $request->name;
    $universite->website = $request->website;

    // Process and store logo (assuming 'logo' field stores the path)
    if ($request->hasFile('logo')) {
        $logoName = time() . '.' . $request->logo->getClientOriginalExtension();
        $request->logo->storeAs('public/logos', $logoName);
        $universite->logo = $logoName;
    }

    $universite->save();

    // Redirect to the 'listUniv' route with a success message
    return redirect()->route('listUniv')->with('message', 'Université créée avec succès !');
}



    public function list()
{
    // Récupération de toutes les universités
    $universites = University::all();

    // Retourner la vue avec les données
    return view('ListeUniversite', ['universites' => $universites]);
}
public function AffichageUniversite()
{
    // Récupération de toutes les universités
    $universites = University::all();
    $criteres = RatingCriterion::all();

    // Retourner la vue avec les données
    return view('PageUniversite',
     ['universites' => $universites,
     'criteres' => $criteres
    ]);
}

public function destroy($id)
{
    // Récupérer l'université à supprimer
    $university = University::findOrFail($id);

    // Supprimer l'université de la base de données
    $university->delete();

    // Rediriger avec un message de succès
    return redirect()->route('listUniv')->with('success', 'Université supprimée avec succès !');
}
public function submitRatings(Request $request)
{
    // Récupérer les données envoyées depuis le formulaire
    $ratings = $request->input('ratings');
    $comments = $request->input('comments');

    // Enregistrer les notes et les commentaires dans la base de données ou effectuer d'autres opérations nécessaires
    foreach ($ratings as $universiteId => $criteriaRatings) {
        foreach ($criteriaRatings as $critereId => $rating) {
            // Enregistrez la note dans la base de données ou effectuez toute autre opération nécessaire
            // Exemple: University::find($universiteId)->ratings()->create(['critere_id' => $critereId, 'note' => $rating]);
        }

        // Enregistrer le commentaire correspondant à l'université
        $comment = $comments[$universiteId];
        // Enregistrez le commentaire dans la base de données ou effectuez toute autre opération nécessaire
    }

    // Rediriger ou renvoyer une réponse appropriée
    return redirect()->back()->with('success', 'Notes et commentaires soumis avec succès !');
}
public function showClassement()
    {
        // Récupérer les données nécessaires pour le classement
        $classement = University::orderBy('averageRating', 'desc')->get();

        // Passer les données à la vue
        return view('Classement', ['classement' => $classement]);
    }

}
