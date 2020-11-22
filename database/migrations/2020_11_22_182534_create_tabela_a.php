<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTabelaA extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * Os nomes das tabelas estão meramente ao tipo como foi acordado pela conversa que tivemos
     */
    public function up()
    {
        Schema::create('tabela_a', function (Blueprint $table) {
            $table->id();
            $table->string('desc');
            $table->double('valor');
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
        Schema::dropIfExists('tabela_a');
    }
}
