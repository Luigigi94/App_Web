<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class galeria extends Model
{
    protected $table='galeria';

    protected $fillable=['id_users','nombre'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }

    public function Asigna_galeria()
    {
        return $this->belongsToMany('App\Asigna_galeria');
    }
}
