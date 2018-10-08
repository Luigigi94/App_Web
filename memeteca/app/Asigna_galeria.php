<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class asigna_galeria extends Model
{
    protected $table='asigna_galeria';

    protected $fillable = ['id_galeria','id_imagen'];

    public function Imagen()
    {
        return $this->belongsToMany('App\Imagen');
    }

    public function Galeria()
    {
        return $this->belongsToMany('App\Galeria');
    }
}
