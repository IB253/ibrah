<?php

namespace App\Http\Controllers;

use App\Models\Enseignant;
use App\Models\Etudiant;
use App\Models\Programme;
use Exception;
use Illuminate\Http\Request;

class EtudiantController extends Controller
{
    public function afficherProgrammes(){
        $programmes = Programme::all();
        return view('ajout_etudiant', compact('programmes'));
    }
    public function create(Request $request)
    {
        $etudiant = new Etudiant();
        
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->password = $request->password;
        $etudiant->statut = $request->statut;
        $etudiant->adresse = $request->adresse;
        $etudiant->telephone = $request->telephone;
        $etudiant->date_naissance = $request->date_naissance;
        $etudiant->programme_id = $request->programme;
        if($request->hasFile('image')){
            $img = $request->file('image');
            $imgName = time() . "_" . $img->getClientOriginalName();
            $img->move(public_path('assets/images'), $imgName);
            $etudiant->image = $imgName;
        }
        else{
            $etudiant->image = null;
        }
        $etudiant->save();
        return redirect()->back();

    }
    public function afficherProgrammesAdmin(){
        $programmes = Programme::all();
        return view('ajout_etudiant', compact('programmes'));
    }
    public function createAdmin(Request $request)
    {
        $etudiant = new Etudiant();
        
        $etudiant->nom = $request->nom;
        $etudiant->prenom = $request->prenom;
        $etudiant->email = $request->email;
        $etudiant->password = $request->password;
        $etudiant->statut = $request->statut;
        $etudiant->adresse = $request->adresse;
        $etudiant->telephone = $request->telephone;
        $etudiant->date_naissance = $request->date_naissance;
        $etudiant->programme_id = $request->programme;
        if($request->hasFile('image')){
            $img = $request->file('image');
            $imgName = time() . "_" . $img->getClientOriginalName();
            $img->move(public_path('assets/images'), $imgName);
            $etudiant->image = $imgName;
        }
        else{
            $etudiant->image = null;
        }
        $etudiant->save();
        return redirect()->back();

    }
    public function Login(Request $request){
        try{
        $etudiant = Etudiant::where([ ['email',$request->email], ['password', $request->password] ]) ->firstOrFail();
        return view('etudiant_dashboard', compact('etudiant'));
        }
        catch(Exception $ex){
            return view('error', compact('ex'));
        }
    }
    
}
