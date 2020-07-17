<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reserva extends Model
{
  public function user(){
    return $this->belongsTo('App\User');
  }

  public function estabelecimento(){
    return $this->belongsTo('App\Estabelecimento');
  }

  public function Quarto_has_reserva(){
    return $this->hasMany('App\Quarto_has_reserva');
  }

  public function pagamento(){
    return $this->hasOne('App\Pagamento');
  }

  public function cancelamento(){
    return $this->hasOne('App\Cancelamento');
  }
}
