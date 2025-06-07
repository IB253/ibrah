<?php

namespace App\Http\Controllers;

use App\Models\Salle;
use Illuminate\Http\Request;

class SalleController extends Controller
{
    public function create(Request $request)
    {
        $salle = new Salle();
        $salle->capacite = $request->capacite;
        $salle->disponibilite = $request->disponibilite;
        $salle->save();
        return redirect()->back();
    }
}
