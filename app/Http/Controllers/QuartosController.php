<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Quarto;
use App\Estabelecimento;
use Illuminate\Http\Storage;
use Illuminate\Support\Facades\DB;
class QuartosController extends Controller
{

  function cadastrarQuarto(Request $request){

    $validacoes = $request->validate([
      'nome' => 'required|min:10',

      'numCamasSolteiro' => 'required',

      'numCamasCasal' => 'required',

      'valorDiaria' => 'required',

      'descricao' => 'required',

      'fotos' => 'required',

      'quantidade' => 'required'
    ]);

     for ($i=0; $i < $request->quantidade; $i++) {

     $quarto = new Quarto;

     $quarto->nome = $request->nome;

     $quarto->numCamasSolteiro = $request->numCamasSolteiro;

     $quarto->numCamasCasal = $request->numCamasCasal;

     $quarto->valorDiaria = $request->valorDiaria;

     $quarto->descricao = $request->descricao;

     $quarto->estabelecimentos_id = $request->estabelecimentos_id;
        if ($request->hasFile('fotos')) {
           $estencao = $request->fotos->getClientOriginalExtension();
           $nomeFoto =  $request->estabelecimentos_id.$request->nome.'.'.$estencao;
              $request->fotos->storeAs('quartos', $nomeFoto)."<br>";
              $quarto->fotos =  $nomeFoto;
        }
     $quarto->save();
     }
    return view('homeAdmin');
  }

  function quartosAdmin($id){
    $quartos = DB::select("select * from quartos where estabelecimentos_id = $id;");
    return view('quartosAdmin', ['_ID'=>$id], compact('quartos'));
  }

  function dadosQuartosAdmin($id){
    $quarto = Quarto::find($id);
    return view('dadosQuartosAdmin',["_ID"=>$id], compact('quarto'));
  }
}
