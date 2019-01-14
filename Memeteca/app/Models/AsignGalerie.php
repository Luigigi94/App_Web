<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AsignGalerie extends Model
{
    protected $table='asign_galeries';

    protected $fillable = [
      'image_id','galery_id',
    ];
}
