<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function create(Request $request)
    {
        $admin = new Admin();
        $admin->nom = $request->nom;
        $admin->email = $request->email;
        $admin->password = $request->password;
        if($request->hasFile('image')){
            $img = $request->file('image');
            $imgName = time() . '_' . $img->getClientOriginalName();
            $img->move(public_path("assets/images"), $imgName);
            $admin->image = $imgName;
        }
        else{
            $admin->image = null;
        }
        $admin->save();
        return redirect()->back();
    }
}
