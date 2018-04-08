<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
use App\PublicationFichier;

class Publication extends Model
{
    
    protected $fillable = [
        'titre','contenu','date_publication','user_id'
    ];


    public function categorie() {
        return $this->belongsTo(Categories::class);
    }

    public function publication_avec_fichier() {
        return $this->hasOne(Categories::class);
    }
}
