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
      $validacoes = $request->validate([
        'nome' => 'required|min:10',
        'email' => 'required|email|unique:users',
        'senha' => 'required|lte:confirmar|min:6'
      ]);

        $user = new User();
        $user->nome  = $request->nome;
        $user->email = $request->email;
        $user->senha = Hash::make($request->senha);
        $user->save();

      if (Auth::attempt([ "email"=>$request->email, "password"=>$request->senha]))
      { return redirect('/'); }
      else { return redirect('/cadastro'); }
  }

    function login(Request $request){
      if (Auth::attempt([ "email"=>$request->email, "password"=>$request->senha]))
      { return redirect('/'); }
      else {
      $validacoes = $request->validate([
      'email'=>'min:99999']);
      return redirect('/login');}
      }

    function logout(Request $request){
      Auth::logout();
      return redirect('/');
    }
}
