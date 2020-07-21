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
    if (Auth::check()) {
      return redirect('/perfil');
    }
    $validacoes = $request->validate([
      'nome' => 'required|min:6',
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
  }

    function login(Request $request){
        if (Auth::check()) {
          return redirect('/perfil');
        }
        if (Auth::attempt([ "email"=>$request->email, "password"=>$request->senha]))
        { return redirect('/'); }
        else {
        $validacoes = $request->validate([
        'email'=>'min:99999']);
        return redirect('/login');}
      }

      function atualizar(Request $request){
        if (!Auth::check()) {
          return redirect('/login');
        }
        $validacoes = $request->validate([
          'nome' => 'required|min:10',
          'email' => 'required|email'
        ]);
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->cpf = $request->cpf;
        $user->nome = $request->nome;
        $user->email = $request->email;
        $user->data_nasc = $request->dataNasc;
        $user->cidade = $request->cidade;
        $user->pais = $request->pais;
        $user->tel = $request->tel;
        $user->receber_info = $request->receber_info;
        $user->save();
        return redirect('/');
      }

      function atualizarSenha(Request $request){
        $id = auth()->user()->id;
        $user = User::find($id);
        $user->senha = Hash::make($request->senha);
        $user->save();

        return redirect('/perfil');

      }

      function logout(Request $request){
        if (Auth::check()) {
          Auth::logout();
          return redirect('/');
        } else {
          return redirect('/login');
        }
      }
}
