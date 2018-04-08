<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Publication;

class Like extends Model
{
    protected $fillable = [
        'user_id','publication_id'
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
    public function publication() {
        return $this->belongsTo(Publication::class);
    }
}
