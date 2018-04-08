<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\profile;
use App\Formation;
use App\Role;
use App\Reclamation;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','nom','formation_id', 'prenom','adresse','telephone','sex','date_naissance', 'email', 'password',
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

    public function reclamation() {
        return $this->hasMany(Reclamation::class);
    }
}
