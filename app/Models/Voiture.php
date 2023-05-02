<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voiture extends Model
{
    use HasFactory;


    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }
    public function agence()
    {
        return $this->belongsTo(Agence::class);
    }

}
