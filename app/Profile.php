<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Profile extends Model
{
   protected $fillable =  [
   'user_id', 'photo_profile','telephone','formation',
   'sexe','date_naissance','information','facebook','twitter'
   ];


   public function user() {
       return $this->belongsTo(User::class);
   }
}
