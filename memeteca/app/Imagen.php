<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\App;

class imagen extends Model
{
    protected $table='imagen';

    protected $fillable= ['enlace','id_categoria','puntuacion'];


    public function Asigna_galeria()
    {
        return $this->belongsToMany('App\Asigna_galeria');
    }

    public function Categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
}
