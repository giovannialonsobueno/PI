<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  /*
   alterações feitas:
  coluna 'adm' agora tem como valor default (0).
  caso o valor seja 1, o usuário é um administrador (nescessário mudar manualmente o atributo)
  delete essas mensagens no próximo commit
  ou atualize-as caso haja mais alguma alteração nesta migration
  */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->id();
          $table->string('nome');
          $table->string('email')->unique();
          $table->string('senha');
          $table->bigInteger('tel')->nullable();
          $table->bigInteger('cpf')->nullable();
          $table->string('cidade')->nullable();
          $table->string('pais')->nullable();
          $table->date('data_nasc')->nullable();
          $table->tinyInteger('receber_info')->nullable();
          $table->tinyInteger('adm')->default(0);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
