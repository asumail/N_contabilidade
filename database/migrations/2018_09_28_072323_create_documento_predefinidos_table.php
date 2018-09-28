<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDocumentoPredefinidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('documento_predefinidos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('designacao');
            $table->string('abreviatura');
            $table->integer('num_interno');
            $table->unsignedInteger('sub_empresa_id');
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
        Schema::dropIfExists('documento_predefinidos');
    }
}
