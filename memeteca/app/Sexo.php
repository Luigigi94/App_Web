<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sexo extends Model
{
    protected $table='sexo';

    protected $fillable= ['genero'];

    public function User()
    {
        return $this->belongsTo('App\User');
    }
}
