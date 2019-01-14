<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Eluser extends Model
{

    use Notifiable;

    protected $fillable = [
        'nombre','email','password','profession_id',
    ];

    protected $hidden = [
      'password', 'remember_token',
    ];

    protected $casts = [
      'is_admin' => 'boolean'
    ];

    public function isAdmin()
    {
        return $this->email === 'el.luige94@gmail.com';
    }

    public static function findByEmail($email)
    {
        return static::where(compact('email'))->first();
    }

    public function profession()
    {
        return $this->belongsTo(Profession::class);
    }
}
