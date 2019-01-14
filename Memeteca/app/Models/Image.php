<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $table='images';
    protected $fillable=[
      'nombre_imagen','imagen','puntuacion','category_id',
    ];

    public function categories()
    {
        return $this->belongsTo(Image::class);
    }

    public function as_galeries()
    {
        return $this->hasMany(AsignGalerie::class);
    }
}
