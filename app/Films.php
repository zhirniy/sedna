<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Films extends Model
{
     /**
   * Model table film.
   *
   * @var string
   */
  protected $table = 'films';

  protected $fillable = [
        'id_user', 
        'name_film', 
        'date_created',
        'format'
    ];


  public function actors_all()
  {
    return $this->belongsToMany('App\Actor', 'films_actor');
  }
}
