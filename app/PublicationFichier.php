<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Publication;

class PublicationFichier extends Model
{
    protected $fillable = [
        'publication_id','chemin_fichier','type_fichier'
    ];

    public function publication() {
        return $this->belongsTo(Publication::class);
    }
}
