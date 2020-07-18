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
     /*
      alterações feitas:
      coluna 'cnpj' alterada para biginteger (era string)
      coluna 'cep' alterada para biginteger (era string)
      colunas: de 'wifi' até 'cancelamentoGratuito'
      alteradas para tinyInteger (era integer)
     delete essas mensagens no próximo commit
     ou atualize-as caso haja mais alguma alteração nesta migration
     */
    public function up()
    {
        Schema::create('estabelecimentos', function (Blueprint $table) {
          $table->id();
          $table->string('nome');
          $table->string('email');
          $table->bigInteger('cnpj');
          $table->string('endereco');
          $table->bigInteger('cep');
          $table->string('cidade');
          $table->string('estado');
          $table->biginteger('tel1');
          $table->biginteger('tel2');
          $table->biginteger('celular');
          $table->text('descricao');
          $table->tinyInteger('wifi')->nullable();
          $table->tinyInteger('cafeDaManha')->nullable();
          $table->tinyInteger('piscina')->nullable();
          $table->tinyInteger('sauna')->nullable();
          $table->tinyInteger('permitePets')->nullable();
          $table->tinyInteger('cancelamentoGratuito')->nullable();
          $table->text('fotos');
          $table->integer('numEstrelas');
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
