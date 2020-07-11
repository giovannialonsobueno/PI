<?php
namespace App\Http\Controllers;
  use Illuminate\Http\Request;
    class Controles extends Controller{
      function home(){ return view('index'); }

      function item($id){ return view('item',["_ID"=>$id]);}

      function pesquisa(){ return view('pesquisa'); }

      function login(){ return view('login'); }

      function produto(){ return view('produto'); }

      function reserva(){ return view('reserva'); }

      function reservas($id){ return view('reservas',["_ID"=>$id]); }

      function Rpesq(){ return view('resultadoPesquisa'); }

      function entrar(){ return view('entrar');}

      function cadastroHotel() {return view('cadastroHotel');}

      function homeAdmin() {return view('homeAdmin');}

      function hotel() {return view('hotel');}

      function user() {return view('user');}
  }
 ?>
