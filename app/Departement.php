<?php

namespace App;
use App\Formation;
use Illuminate\Database\Eloquent\Model;

class Departement extends Model
{
    protected $fillable = [
        'nom','departement_id'
    ];

    public function formation() {
        return $this->hasMany(Formation::class);
    }
}
