<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnoEmpresaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ano_empresa', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('ano_id')->unsigned();
            $table->unsignedInteger('sub_empresa_id')->unsigned();
            $table->foreign('ano_id')
                ->references('id')->on('ano_contabilisticos')
                ->onDelete('cascade');
            $table->foreign('sub_empresa_id')
                ->references('id')->on('sub_empresas')
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
        Schema::dropIfExists('ano_empresa');
    }
}
