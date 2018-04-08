<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Formation;

class Module extends Model
{
    protected $fillable = [
        'nom'
    ];


    public function formation() {
        return $this->belongsTo(Formation::class);
    } 
}
