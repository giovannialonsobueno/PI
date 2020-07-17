<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Quarto extends Model
{
  public function estabelecimento(){
    return $this->belongsTo('App\Estabelecimento');
  }

  public function quarto_has_reserva(){
    return $this->hasMany('App\Quarto_has_reserva');
  }
}
