<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Estabelecimento extends Model
{
  public function avaliacoes(){
    return $this->hasMany('App\Avaliacoes');
  }


  public function reserva(){
    return $this->hasMany('App\Reserva');
  }

  public function quarto(){
    return $this->hasMany('App\Quarto');
  }
}
