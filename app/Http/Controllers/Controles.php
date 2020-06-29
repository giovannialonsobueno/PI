<?php
namespace App\Http\Controllers;
  use Illuminate\Http\Request;
    class Controles extends Controller{

      public function home(){
        return view('index');
        }

      function favorito(){ return view('favorito'); }
      function cadastro(){ return view('cadastro'); }
      function login(){ return view('login'); }
      function produto(){ return view('produto'); }
      function item(){ return view('item'); }
  }
 ?>
