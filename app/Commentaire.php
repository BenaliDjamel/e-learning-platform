<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publication;

class Commentaire extends Model
{
    protected $fillable = [
        'publication_id','commentaire'
    ];

    public function publication() {
        return $this->belongsTo(Publication::class);
    }
}
