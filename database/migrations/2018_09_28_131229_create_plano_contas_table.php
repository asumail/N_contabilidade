<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlanoContasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plano_contas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('numero_conta');
            $table->string('designacao');
            $table->unsignedInteger('ano_empresas_id');
            $table->foreign('ano_empresas_id')
                 ->references('id')->on('ano_empresa')
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
        Schema::dropIfExists('plano_contas');
    }
}
