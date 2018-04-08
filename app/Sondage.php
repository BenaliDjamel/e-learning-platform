<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publication;
use App\SondageChoix;

class Sondage extends Model
{
   
    protected $fillable = [
        'publication_id','question'
    ];


    public function publication() {
        return $this->belongsTo(Publication::class);
    }

    public function sondage_choix() {
        return $this->hasMany(SondageChoix::class);
    }
}
