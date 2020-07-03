<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Teste extends Controller
{
  public function formSubmit(Request $req){
          echo "<pre>";
          print_r($req->input());
          echo "</pre>";
          $info = compact($req->input());    
          echo $info['email']."<br>".$info['nome'];
  }
}
