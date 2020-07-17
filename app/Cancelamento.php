<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cancelamento extends Model
{
  public function reserva(){
    return $this->belongsTo('App\Reserva');
  }
}
