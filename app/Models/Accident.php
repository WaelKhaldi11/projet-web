<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class accident extends Model
{
    use HasFactory;
    public function assurance()
    {
        return $this->hasMany(Assurance::class);
    }
}
