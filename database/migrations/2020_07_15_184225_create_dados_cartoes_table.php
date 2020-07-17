<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDadosCartoesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     /*
      alterações feitas:
     coluna 'numeroCartao' agora é bigInteger (era string)
     delete essas mensagens no próximo commit
     ou atualize-as caso haja mais alguma alteração nesta migration
     */
    public function up()
    {
        Schema::create('dados_cartoes', function (Blueprint $table) {
          $table->id();
          $table->bigInteger('numeroCartao');
          $table->string('nomeCartao');
          $table->foreignId('usuarios_id')->references('id')->on('users');
          $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('dados_cartoes');
    }
}
