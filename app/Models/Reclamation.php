<?php

namespace App\Models;

use App\Http\Controllers\UsersController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class reclamation extends Model
{
    use HasFactory;
    public function users()
    {
        return $this->hasOne(Users::class);
    }
    public function reponse()
    {
        return $this->hasOne(Reclamation::class);
    }
}
