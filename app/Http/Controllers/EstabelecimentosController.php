<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento;
use App\Imagem;

class EstabelecimentosController extends Controller
{
  function cadastroHotel(Request $request)
  {

    $validacoes = $request->validate([
      "nome" => "required",

      "email" => "required|unique:estabelecimentos",

      "cnpj" => "required|size:14",

      "endereco" => "required",

      "cep" => "required|size:8",

      "cidade" => "required",

      "estado" => "required",

      "tel1" => "required|between:12,14",

      "tel2"=>"required|between:12,14",

      "celular"=>"required|between:13,15",

      "descricao"=>"required",

      "numEstrelas"=>"required|integer|between:1,5",

      "fotos"=>"required"
    ]);
    $hotel = new Estabelecimento;

    $hotel->nome = $request->nome;

    $hotel->email = $request->email;

    $hotel->cnpj = $request->cnpj;

    $hotel->endereco = $request->endereco;

    $hotel->cep = $request->cep;

    $hotel->cidade = $request->cidade;

    $hotel->estado = $request->estado;

    $hotel->tel1 = $request->tel1;

    $hotel->tel2 = $request->tel2;

    $hotel->celular = $request->celular;

    $hotel->descricao = $request->descricao;

    $hotel->wifi = $request->wifi;

    $hotel->cafeDaManha = $request->cafeDaManha;

    $hotel->piscina = $request->piscina;

    $hotel->sauna = $request->sauna;

    $hotel->permitePets = $request->permitePets;

    $hotel->cancelamentoGratuito = $request->cancelamentoGratuito;

    $hotel->fotos = $request->fotos;

    $hotel->numEstrelas = $request->numEstrelas;

    $hotel->save();
      $id = $hotel->id;
        for($i=0; $i<count($request->allFiles()['fotos']); $i++){
          $file = $request->allFiles()['fotos'][$i];

          $imagem = new imagem();

          $imagem->estabelecimentos_id = $hotel->id;
          $imagem->caminho = $file->store('imagensHotel');
          $imagem->save();
          unset($imagem);
        }
    return redirect('/cadastroQuartos/'.$id);
  }
}
