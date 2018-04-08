<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publication;

class Categories extends Model
{
    protected $fillable = [
        'nom'
    ];


    public function publication() {
        return $this->hasMany(Publication::class);
    }
}
