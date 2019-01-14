<?php

namespace App\Models;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Sex extends Model
{
    //
    protected $table='Sexs';

    protected $fillable = [
      'genero',
    ];

    public function users()
    {
        return $this->hasMany(User::class);
    }
}
