<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films_Actors extends Model
{
     protected $table = 'films_actor';

     public function actor()
  {
    return $this->hasOne('App\Actor', 'id');
  }
}
