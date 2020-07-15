<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstabelecimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {
          $table->id();
          $table->string('nome');
          $table->string('endereco');
          $table->integer('tel1');
          $table->integer('tel2');
          $table->text('descricao');
          $table->text('fotos');
          $table->integer('numEstrelas');
          $table->foreignId('avaliacoes_id')->references('id')->on('avaliacoes');
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
        Schema::dropIfExists('estabelecimentos');
    }
}
