<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Categorie extends Model
{
    protected $fillable=[
        'desc_categoria',
    ];

    public function images()
    {
        return $this->hasMany(Categorie::class);
    }
}
