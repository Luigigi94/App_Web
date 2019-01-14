<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Profession extends Model
{
    protected $fillable = [
      'nombre',
    ];

    public function elusers()
    {
        return $this->hasMany(Eluser::class);
    }
}
