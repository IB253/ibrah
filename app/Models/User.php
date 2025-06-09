<?php

namespace App\Models;

<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a873a32 (Initialisation du dépôt)
// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;
<<<<<<< HEAD
=======
=======
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)

    /**
     * The attributes that are mass assignable.
     *
<<<<<<< HEAD
     * @var list<string>
=======
<<<<<<< HEAD
     * @var list<string>
=======
     * @var array<int, string>
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
<<<<<<< HEAD
     * @var list<string>
=======
<<<<<<< HEAD
     * @var list<string>
=======
     * @var array<int, string>
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
<<<<<<< HEAD
=======
<<<<<<< HEAD
>>>>>>> a873a32 (Initialisation du dépôt)
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            'email_verified_at' => 'datetime',
            'password' => 'hashed',
        ];
    }
<<<<<<< HEAD
=======
=======
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
>>>>>>> 9114dc0 (projet livreBoutique)
>>>>>>> a873a32 (Initialisation du dépôt)
}
