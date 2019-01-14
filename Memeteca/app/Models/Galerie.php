<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    protected $fillable = [
        'nombre','user_id',
    ];

    public function as_galeries()
    {
        return $this->hasMany(AsignGalerie::class);
    }

    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
