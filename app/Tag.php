<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publication;

class Tag extends Model
{
    protected $fillable = [
        'nom'
    ];

    public function publications() {
        return $this->belongsToMany(Publication::class);
    }
}
