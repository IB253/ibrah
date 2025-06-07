<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Programme;
use Illuminate\Http\Request;

class ProgrammeController extends Controller
{
    public function create(Request $request)
    {
        $programme = new Programme();
        $programme->titre = $request->titre;
        $programme->description = $request->description;
        $programme->duree = $request->duree;
        if($request->hasFile('image')){
            $img = $request->file('image');
            $imgName = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path("assets2/img"), $imgName);
            $programme->image = $imgName;
        }
        else{
            $programme->image = null;
        }
        $programme->save();
        return redirect('/ajout_programme');
    }
    public function getAllPrograms(){
        $programmes = Programme::all();
        $enseignants = Enseignant::all();
        $etudiants = Etudiant::limit(4)->get();
        return view('welcome', compact('programmes','enseignants','etudiants'));
    }
    
}

