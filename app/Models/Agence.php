<?php

namespace App\Models;

use App\Http\Controllers\VoitureController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class agence extends Model
{
    use HasFactory;
    
    public function voiture()
    {
        return $this->hasMany(Voiture::class);
    }
}
