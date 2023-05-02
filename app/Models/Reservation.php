<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reservation extends Model
{
    use HasFactory;

    public function voiture()
    {
        return $this->hasOne(Voiture::class);
    }

    public function user()
    {
        return $this->hasMany(Users::class);
    }
}
