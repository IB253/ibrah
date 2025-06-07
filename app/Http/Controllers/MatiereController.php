<?php

namespace App\Http\Controllers;

use App\Models\Matiere;
use App\Models\Programme;
use Illuminate\Http\Request;

class MatiereController extends Controller
{
    public function afficherProgrammes(){
        $programmes = Programme::all();
        return view('ajout_matiere', compact('programmes'));
    }
    public function create(Request $request)
    {
        $matiere = new Matiere();
        $matiere->numero = $request->numero;
        $matiere->titre = $request->titre;
        $matiere->duree = $request->duree;
        $matiere->programme_id = $request->programme;
        $matiere->save();
        return redirect('/ajout_matiere');
    }
}
