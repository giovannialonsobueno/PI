<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avaliacao extends Model
{
    protected $table = "avaliacoes";

    public function estabelecimento(){
      return $this->belongsTo('App\Estabelecimento');
    }


    public function user(){
      return $this->belongsTo('App\User');
    }
}
