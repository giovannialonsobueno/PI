<?php

use Illuminate\Database\Seeder;

class EstabelecimentosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      for ($i=0; $i < 5; $i++) {
      DB::table('estabelecimentos')->insert([
          'nome'=>'teste'.$i,
          'email'=>'teste@gmail.com'.$i,
          'cnpj'=>'1234567891013'.$i,
          'endereco'=>'teste endereço'.$i,
          'cep'=>'1234567'.$i,
          'cidade'=>'cidade teste'.$i,
          'estado'=>'estado teste'.$i,
          'tel1'=>'5511123123123'.$i,
          'tel2'=>'55243243243'.$i,
          'celular'=>'551199999999'.$i,
          'descricao'=>'teste descricao'.$i,
          'wifi'=>'1',
          'cafeDaManha'=>'',
          'piscina'=>'',
          'sauna'=>'1',
          'permitePets'=>'',
          'cancelamentoGratuito'=>'',
          'numEstrelas'=>'1',
      ]);
      }
    }
}
