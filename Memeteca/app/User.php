<?php

namespace App;

use App\Models\Galerie;
use App\Models\Sex;
use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{


    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password', 'Nombre_Real', 'Apellido_Paterno', 'Apellido_Materno', 'Edad', 'sex_id',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function sex()
    {
        return $this->belongsTo(Sex::class);
    }

    public function galeries()
    {
        return $this->hasMany(Galerie::class);
    }
}
