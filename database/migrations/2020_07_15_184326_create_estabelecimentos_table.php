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
          $table->string('email');
          $table->string('cnpj');
          $table->string('endereco');
          $table->string('cep');
          $table->string('cidade');
          $table->string('estado');
          $table->biginteger('tel1');
          $table->biginteger('tel2');
          $table->biginteger('celular');
          $table->text('descricao');
          $table->integer('wifi');
          $table->integer('cafeDaManha');
          $table->integer('piscina');
          $table->integer('sauna');
          $table->integer('permitePets');
          $table->integer('cancelamentoGratuito');
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
