<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Imagem extends Model
{
  protected $table = "imagens";

  public function estabelecimento(){
    return $this->belongsTo('App\Estabelecimento');
  }
}
