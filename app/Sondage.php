<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publication;

class Sondage extends Model
{
   
    protected $fillable = [
        'publication_id','question'
    ];


    public function publication() {
        return $this->belongsTo(Publication::class);
    }
}
