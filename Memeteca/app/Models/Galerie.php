<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Galerie extends Model
{
    protected $fillable = [
        'nombre','user_id',
    ];
}
