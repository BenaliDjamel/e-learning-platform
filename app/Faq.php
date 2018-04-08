<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publication;

class Faq extends Model
{
    protected $fillable = [
        'publication_id','meilleur_reponse'
    ];

    public function publication() {
        return $this->belongsTo(Publication::class);
    }
}
