<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Estabelecimento;

class EstabelecimentosController extends Controller
{
  function cadastroHotel(Request $request)
  {
      // $validacoes = $request->validate([]);
    $hotel = new Estabelecimentos;
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
  }
}
