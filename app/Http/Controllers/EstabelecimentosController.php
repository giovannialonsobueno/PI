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
    $hotel->endereco = $request->endereco;
    $hotel->tel1 = $request->tel1;
    $hotel->tel2 = $request->tel2;
    $hotel->descricao = $request->descricao;
    $hotel->fotos = $request->fotos;
    $hotel->numEstrelas = $request->estrelas;
  }
    public function uploadSubmit(Request $request)
    {

    if($request->hasFile('photos'))
    {
    $allowedfileExtension=['pdf','jpg','png'];
    $files = $request->file('photos');
    foreach($files as $file){
    $filename = $file->getClientOriginalName();
    $extension = $file->getClientOriginalExtension();
    $check=in_array($extension,$allowedfileExtension);
    if($check)
    {
    $items= Item::create($request->all());
    foreach ($request->photos as $photo) {
      $filename = $photo->store('photos');
        ItemDetail::create([
          'item_id' => $items->id,
          'filename' => $filename
        ]);}
    echo "Upload Successfully";
      }
    }
   }
 }
}
