<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class categoria extends Model
{
    protected $table='categoria';

    protected $fillable=['desc_categoria'];

    public function Imagen()
    {
        return $this->hasMany('App\Imagen');
    }
}
