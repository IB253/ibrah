<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Matiere;
use Illuminate\Http\Request;

class EnseignantController extends Controller
{
    public function create(Request $request)
    {
        $enseignant = new Enseignant();
        $enseignant->nom = $request->nom;
        $enseignant->prenom = $request->prenom;
        $enseignant->email = $request->email;
        $enseignant->password = $request->password;
        $enseignant->statut = $request->statut;
        if($request->hasFile('image')){
            $img = $request->file('image');
            $imgName = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path("assets/images"), $imgName);
            $img->move(public_path("assets2/img"), $imgName);
            $enseignant->image = $imgName;
        }
        else{
            $enseignant->image = null;
        }
        $enseignant->save();
        return redirect('/ajout_enseignant');
    }
     
}
