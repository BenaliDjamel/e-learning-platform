<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Role extends Model
{
    protected $fillable = [
        'user_id','nom'
    ];


    public function user() {
        return $this->belongsTo(User::class);
    }
}
