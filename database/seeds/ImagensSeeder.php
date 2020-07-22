<?php

use Illuminate\Database\Seeder;

class ImagensSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1; $i <= 4; $i++) {
          DB::table('imagens')->insert([
              'caminho'=>'algarve flor da rocha'.$i.'.jpg',
              'estabelecimentos_id'=>1
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'banff banff inn'.$i.'jpg',
              'estabelecimentos_id'=>2
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'banff Irwins Mountain Inn'.$i.'jpg',
              'estabelecimentos_id'=>3
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'bosnia hotel grad'.$i.'jpg',
              'estabelecimentos_id'=>4
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'bosnia hotel logavina'.$i.'jpg',
              'estabelecimentos_id'=>5
          ]);

          DB::table('imagens')->insert([
              'caminho'=>'bosnia zepter hotel'.$i.'jpg',
              'estabelecimentos_id'=>6
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'budapeste fashion street'.$i.'jpg',
              'estabelecimentos_id'=>7
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'budapeste korona panzio'.$i.'jpg',
              'estabelecimentos_id'=>8
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'budapeste nn apartmanette'.$i.'jpg',
              'estabelecimentos_id'=>9
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'castilo casa pepa'.$i.'jpg',
              'estabelecimentos_id'=>10
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'castilo hotel monterrey'.$i.'jpg',
              'estabelecimentos_id'=>11
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'castilo the way hotel '.$i.'jpg',
              'estabelecimentos_id'=>12
          ]);
          DB::table('imagens')->insert([
              'caminho'=>'islandia bb hotel'.$i.'jpg',
              'estabelecimentos_id'=>13
          ]);
        }
    }
}
