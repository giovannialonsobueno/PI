<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservas', function (Blueprint $table) {
          $table->id();
          $table->date('dataIN');
          $table->date('dataOUT');
          $table->date('dataReserva');
          $table->integer('numPessoas');
          $table->integer('numQuartos');
          $table->double('valor');
          $table->foreignId('usuarios_id')->references('id')->on('users');
          $table->foreignId('estabelecimentos_id')->references('id')->on('estabelecimentos');
          $table->foreignId('pagamentos_id')->references('id')->on('pagamentos');
          $table->foreignId('cancelamentos_id')->references('id')->on('cancelamentos');
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
        Schema::dropIfExists('reservas');
    }
}
