<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
class UsuariosController extends Controller
{
  function store(Request $request){
  $user = new User();
  $user->nome = $request->nome;
  $user->email = $request->email;
  $user->senha = Hash::make($request->senha);
  if ($request->senha == $request->confirmar) {
    // code...
  }
  $user->save();
  return "usuario criado com sucesso";
  }

  function login(Request $request){
        $email = $request->email;
        $senha = $request->senha;
        if (Auth::attempt([
        "email"=>$email, "password"=>$senha
        ])) { return "yaay :D"; }
        else { return ">:("; }
  }
}
