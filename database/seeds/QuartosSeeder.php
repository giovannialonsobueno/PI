<?php

use Illuminate\Database\Seeder;

class QuartosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 13; $i++) {
          for ($o=1; $o <= 5; $o++) {
          DB::table('quartos')->insert([
          'nome'=>'Solteiro',
          'numCamasSolteiro' => 2,
          'numCamasCasal' => 0,
          'valorDiaria' => '135.00',
          'descricao' => 'Quarto duplo com frigobar e banheiro privativo',
          'fotos'=>'quarto.JPG',
          'estabelecimentos_id' => $i ]);

          DB::table('quartos')->insert([
          'nome'=>'Casal',
          'numCamasSolteiro' => 0,
          'numCamasCasal' => 1,
          'valorDiaria' => '150.00',
          'descricao' => 'Quarto casal com frigobar e banheiro privativo',
          'fotos'=>'quarto_casal.jpg',
          'estabelecimentos_id' => $i ]);
          }
        }
    }
}
