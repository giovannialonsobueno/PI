<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento;

class EstabelecimentosController extends Controller
{
  function cadastroHotel(Request $request)
  {
    $validacoes = $request->validate([
      "nome" => "required|min:10",
      "email" => "required|unique",
      "cnpj" => "required|"
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

    $hotel->fotos = 1 ;//$request->fotos;

    $hotel->numEstrelas = $request->numEstrelas;

    $hotel->save();
    return "ok";
  }
}
