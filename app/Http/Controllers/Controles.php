<?php
namespace App\Http\Controllers;
  use Illuminate\Http\Request;
  use Illuminate\Support\Facades\Auth;

    class Controles extends Controller{
      function home()
      {
        return view('index');
      }

      function item($id)
      {
        return view('item',["_ID"=>$id]);
      }

      function pesquisa()
      {
        return view('pesquisa');
      }

      function produto()
      {
        return view('produto');
      }

      function reserva()
      {
        return view('reserva');
      }

      function reservas($id)
      {
        if (Auth::check()) { return view('reservas',["_ID"=>$id]); }
        else { return redirect('/login');}
      }

      function Rpesq()
      {
        return view('resultadoPesquisa');
      }

      function login()
      {
        if (!Auth::check()) {return view('login');}
        else { return redirect('/perfil');}
      }


      function cadastro()
      {
        if (!Auth::check()) {return view('cadastro');}
        else { return redirect('/perfil');}
      }

      function perfil() {
        if (Auth::check())
        {return view('perfil',["_ID"=>$id]);}
        else { return redirect('login');}
      }

      function cadastroHotel()
      {
      return view('cadastroHotel');
      }

      function cadastroQuartos($id){
      if (Auth::check()) {
      if (auth()->user()->adm = 1) {
        return view('cadastroQuartos',["_ID"=>$id]);
      }
        } else {
          return redirect('/');
        }
      }

      function homeAdmin()
      {
      return view('homeAdmin');
      }

      function hotel()
      {
      return view('hotel');
      }

      function user()
      {
      return view('user');
      }
  }
 ?>
