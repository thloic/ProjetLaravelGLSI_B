<?php

namespace App\Http\Controllers;
use App\Models\Comment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CommentController extends Controller
{
    public function getComments()
    {
        // Récupérer tous les commentaires depuis la base de données
        $comments = Comment::all();

        // Retourner la vue avec les données des commentaires
        return view('comment', ['comments' => $comments]);
    }
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'comments.*' => 'required|string|max:255',
        ]);

        // Enregistrer les commentaires dans la base de données
        foreach ($validatedData['comments'] as $universiteId => $commentContent) {
            $comment = new Comment();
            $comment->universite_id = $universiteId;
            $comment->content = $commentContent;
            $comment->save();
        }
        Session::flash('success', 'Enregistrement avec succès !');

        // Rediriger l'utilisateur vers une page de confirmation
        return redirect()->route('AffichageUniv');
    }

}
