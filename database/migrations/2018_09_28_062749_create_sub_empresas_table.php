<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSubEmpresasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sub_empresas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nuit');
            $table->string('nome');
            $table->string('aliase');
            $table->string('localizacao');
            $table->string('telemovel');
            $table->string('fixo');
            $table->unsignedInteger('empresa_id');
            $table->foreign('empresa_id')
                 ->references('id')->on('empresas')
                 ->onDelete('cascade');
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
        Schema::dropIfExists('sub_empresas');
    }
}
