<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Symfony\Component\HttpFoundation\FileBag;

class Categorie extends Model
{
    protected $fillable = ["nom"];


    public function livres()
    {
        return $this->hasMany(Livre::class);
    }

}
