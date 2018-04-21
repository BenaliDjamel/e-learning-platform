<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\Passwords\CanResetPassword;
use App\profile;
use App\Formation;
use App\Role;
use App\Reclamation;
use App\Like;
use App\Notifications\ResetPasswordNotification;
class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nom', 'prenom', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function profile() {
        return $this->hasOne(profile::class);
    }

    public function formation() {
        return $this->belongsTo(Formation::class);
    }

    public function roles() {
        return $this->hasMany(Role::class);
    }

    public function reclamations() {
        return $this->hasMany(Reclamation::class);
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }


    public function sendPasswordResetNotification($token)
    {
        $this->notify(new ResetPasswordNotification($token));
    }
}
