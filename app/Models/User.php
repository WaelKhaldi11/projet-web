<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function reservation()
    {
        return $this->belongsTo(Reservation::class);

    }
    public function reclamation()
    {
        return $this->belongsTo(Reclamations::class);

    }
    public function reponse()
    {
        return $this->belongsTo(Reponses::class);
    }
    public function scopeByRole($query, $role, $user, $id)
{
    $user = User::find($id);
    if ($user->role == 'admin') {
        $user->role = 'admin';
    } else {
        $user->role = 'user';
    }
    $user->save();
    return $query->where('role', $role);
}

}
