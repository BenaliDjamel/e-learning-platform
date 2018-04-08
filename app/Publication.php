<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;
use App\PublicationFichier;
use App\Faq;
use App\Sondage;
use App\Tag;
use App\Commentaire;
use App\Like;
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
        return $this->hasOne(Faq::class);
    }
    public function sondage() {
        return $this->hasOne(Sondage::class);
    }
    public function tags() {
        return $this->belongsToMany(Tag::class);
    }
    public function commentaires() {
        return $this->hasMany(commentaires::class);
    }
    public function likes() {
        return $this->hasMany(Like::class);
    }
}
