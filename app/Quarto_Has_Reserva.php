<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarto_Has_Reserva extends Model
{
  public function quarto(){
    return $this->belongsTo('App\Quarto');
  }

  public function reserva(){
    return $this->belongsTo('App\Reserva');
  }
}
