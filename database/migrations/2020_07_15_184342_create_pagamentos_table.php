<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePagamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     /*
      alterações feitas:
      coluna 'status' alterada para tinyinteger (era string)
     delete essas mensagens no próximo commit
     ou atualize-as caso haja mais alguma alteração nesta migration
     */
    public function up()
    {
          Schema::create('pagamentos', function (Blueprint $table) {
          $table->id();
          $table->double('valor');
          $table->integer('numParcelas');
          $table->tinyInteger('status');
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
        Schema::dropIfExists('pagamentos');
    }
}
