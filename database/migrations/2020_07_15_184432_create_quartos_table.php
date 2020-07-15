<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuartosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quartos', function (Blueprint $table) {
          $table->id();
          $table->string('nome');
          $table->integer('numCamasSolteiro');
          $table->integer('numCamasCasal');
          $table->double('valorDiaria');
          $table->text('descricao');
          $table->text('fotos');
          $table->foreignId('estabelecimentos_id')->references('id')->on('estabelecimentos');
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
        Schema::dropIfExists('quartos');
    }
}
