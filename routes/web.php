<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\EnseignantController;
use App\Http\Controllers\EnseignantMatiere;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\ProgrammeController;
use App\Http\Controllers\SalleController;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProgrammeController::class, 'getAllPrograms']);
Route::get('/ajout_programme', function () {
    return view('ajout_programme');
});
Route::get('/ajout_matiere', [MatiereController::class,'afficherProgrammes'])->name('ajout_matiere');

Route::post('/ajout_programme', [ProgrammeController::class,'create'])->name('ajout_programme.create');
Route::post('/ajout_matiere', [MatiereController::class,'create'])->name('ajout_matiere.create');

Route::get('/ajout_enseignant', function(){
    return view('ajout_enseignant');
});
Route::post('/ajout_enseignant',[EnseignantController::class,'create'])->name('ajout_enseignant.create');


Route::get('/ajout_etudiant', [EtudiantController::class, 'afficherProgrammes']);
Route::post('/ajout_etudiant',[EtudiantController::class, "create"])->name("ajout_etudiant.create");
Route::get('/ajout_etudiant_admin', [EtudiantController::class, 'afficherProgrammesAdmin']);
Route::post('/ajout_etudiant_admin',[EtudiantController::class, "createAdmin"])->name("ajout_etudiant.createAdmin");


Route::get('/ajout_admin',function(){
    return view('ajout_admin');
});
Route::post('/ajout_admin', [AdminController::class, "create"])->name('ajout_admin.create');
Route::get('/ajout_salle',function(){
    return view('ajout_salle');
});
Route::post('/ajout_salle', [SalleController::class, "create"])->name('ajout_salle.create');

Route::get('/login', function(){
    return view('login');
});
Route::get('/checkLogin',[EtudiantController::class, "Login"])->name("checkLogin_Login");
Route::get('/etudiant_dashboard', function(){
    return view('etudiant_dashboard');
});

Route::get('/erreur',[EtudiantController::class, "Login"]);
Route::get('/ajout_enseignant_matiere', [EnseignantMatiere::class, "getEnseignantsMatieres"]);