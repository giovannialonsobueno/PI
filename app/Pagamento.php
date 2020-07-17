<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pagamento extends Model
{
  public function reserva(){
    return $this->belongsTo('App\Reserva');
  }
}
