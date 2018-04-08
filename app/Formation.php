<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User ; 
use App\Module;


class Formation extends Model
{
    protected $fillable = [
        'nom'
    ];


    public function users() {
        return $this->hasMany(User::class);
    }

    public function modules() {
        return $this->hasMany(Module::class);
    }
}
