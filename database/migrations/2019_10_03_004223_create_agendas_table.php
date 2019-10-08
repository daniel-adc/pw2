<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAgendasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agendas', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->timestamps();
            $table->bigInteger('cpf_cnpj')->unsigned();
            $table->bigInteger('profissional_id')->unsigned();
            //$table->foreign('cpf_cnpj')>references("cpf_cnpj")->on("estabelecimentos");
            $table->foreign('profissional_id')->references("id")->on("profissionals");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agendas');
    }
}