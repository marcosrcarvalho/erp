<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriaTabelaPessoas extends Migration
{
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->increments('id');
            $table->char('tipo',1);
            $table->string('razaoSocial');
            $table->string('nomeFantasia');
            $table->string('cnpjCpf',25);
            $table->string('ieRg',25);
            $table->string('cep',8);
            $table->string('endereco');
            $table->integer('enderecoNumero');
            $table->string('enderecoComplemento');
            $table->string('enderecoBairro');
            $table->string('enderecoCidade');
            $table->string('enderecoCodCidade',9);
            $table->char('enderecoEstado',2);
            $table->integer('enderecoCodEstado');
            $table->string('enderecoPais');
            $table->integer('enderecoCodPais');
            $table->string('emailPrincipal');
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
        Schema::dropIfExists('pessoas');
    }
}
