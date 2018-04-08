<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
use App\PublicationFichier;
use App\Sondage;

class Publication extends Model
{
    
    protected $fillable = [
        'titre','contenu','date_publication','user_id'
    ];


    public function categorie() {
        return $this->belongsTo(Categories::class);
    }

    public function publication_avec_fichier() {
        return $this->hasOne(PublicationFichier::class);
    }
    public function faq() {
        return $this->hasOne(PublicationFichier::class);
    }
    public function sondage() {
        return $this->hasOne(Sondage::class);
    }
}
