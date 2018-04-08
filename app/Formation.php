<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User ; 


class Formation extends Model
{
    protected $fillable = [
        'nom'
    ];


    public function users() {
        return $this->hasMany(User::class);
    }
}
