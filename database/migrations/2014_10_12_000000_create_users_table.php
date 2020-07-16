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
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
          $table->id();
          $table->string('nome');
          $table->string('email')->unique();
          $table->string('senha');
          $table->integer('tel')->nullable();
          $table->string('foto')->nullable();
          $table->integer('cpf')->nullable();
          $table->string('cidade')->nullable();
          $table->string('pais')->nullable();
          $table->date('data_nasc')->nullable();
          $table->integer('receber_info')->nullable();
          $table->integer('amd');
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
