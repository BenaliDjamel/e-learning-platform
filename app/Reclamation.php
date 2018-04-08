<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Reclamation extends Model
{
    protected $fillable =  [
        'user_id','title','reclamation'
    ];


    public function user() {
        return $this ->belongsTo(User::class);
    }
}
