<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
        'nome'=>'Administrador',
        'email'=>'adm@adm.com',
        'senha'=>'123456',
        'tel'=>'5511999335399',
        'cpf'=>'12345678901',
        'cidade'=>'São Paulo',
        'pais'=>'Brasil',
        'data_nasc'=>'2002-01-01',
        'adm'=>'1'
      ]);
      DB::table('users')->insert([
        'nome'=>'usuario',
        'email'=>'user@user.com',
        'senha'=>'123456',
        'tel'=>'5511999335399',
        'cpf'=>'12345678901',
        'cidade'=>'São Paulo',
        'pais'=>'Brasil',
        'data_nasc'=>'2002-01-01',
      ]);
    }
}
