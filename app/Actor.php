<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Actor extends Model
{
     /**
   *Model table actor.
   *
   * @var string
   */
  protected $table = 'actor';

  protected $fillable = [
        'first_name', 'last_name'
    ];

   
  public function films()
  {
    return $this->belongsToMany('App\Films', 'films_actor');
  }
}
