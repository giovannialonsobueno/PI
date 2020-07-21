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
      DB::table('EstabelecimentosSeeder')->insert([
          'nome'=>'Saraiva'
      ]);

      DB::table('EstabelecimentosSeeder')->insert([
          'nome'=>'Saraiva'
      ]);

      DB::table('EstabelecimentosSeeder')->insert([
          'nome'=>'Saraiva'
      ]);

      DB::table('EstabelecimentosSeeder')->insert([
          'nome'=>'Saraiva'
      ]);

      DB::table('EstabelecimentosSeeder')->insert([
          'nome'=>'Saraiva'
      ]);
    }
}
