<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Categories;

class Publication extends Model
{
    
    protected $fillable = [
        'titre','contenu','date_publication','user_id'
    ];


    public function categorie() {
        return $this->belongsTo(Categories::class);
    }
}
