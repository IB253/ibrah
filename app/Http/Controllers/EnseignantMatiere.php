<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Matiere;
use Illuminate\Http\Request;

class EnseignantMatiere extends Controller
{
    public function getEnseignantsMatieres()
    {
        $enseignants = Enseignant::all();
        $matieres = Matiere::all();
        return view('ajout_enseignant_matiere', compact('enseignants', 'matieres'));
    }
    public function create(Request $request){
        $ens = new EnseignantMatiere();
        $ens->enseignant_id = $request->enseignant;
        
    }
}
