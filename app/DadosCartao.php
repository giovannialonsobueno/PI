<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class DadosCartao extends Model
{
    protected $table = "dados_cartoes";

    public function usuario(){
      return $this->belongsTo('App\User');
    }
}
