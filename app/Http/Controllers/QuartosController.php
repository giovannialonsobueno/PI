<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quarto;
use App\Estabelecimento;
class QuartosController extends Controller
{
  function mostrarDados(){
  $dados = Estabelecimento::all();
  return view('cadastroQuartos', compact('dados'));
  }
}
