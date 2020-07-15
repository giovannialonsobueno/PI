<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
class UsuariosController extends Controller
{
  function cadastro(Request $request)
  {
      // $validacoes = $request->validate([
      //   'email' => 'required|email'
      // ]);

      $user = new User();
      $user->nome  = $request->nome;
      $user->email = $request->email;
      $user->senha = Hash::make($request->senha);
      $user->save();
      $email = $request->email;
      $senha = $request->senha;
      if (Auth::attempt([ "email"=>$email, "password"=>$senha ]))
      { return redirect('/'); }
      else { return redirect('/entrar'); }
  }

    function login(Request $request){
        $email = $request->email;
        $senha = $request->senha;
        if (Auth::attempt([ "email"=>$email, "password"=>$senha ]))
        { return redirect('/'); }
        else { return redirect('/entrar');}
    }

    function logout(Request $request){
      Auth::logout();
      return redirect('/');
    }
}
