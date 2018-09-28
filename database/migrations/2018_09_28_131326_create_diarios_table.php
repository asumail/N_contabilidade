<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDiariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diarios', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero');
            $table->string('tipo');
            $table->string('tipo_select');
            $table->string('moeda');
            $table->unsignedInteger('ano_empresas_id');
            $table->foreign('ano_empresas_id')
                 ->references('id')->on('ano_empresas')
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
        Schema::dropIfExists('diarios');
    }
}
