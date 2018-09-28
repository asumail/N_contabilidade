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
            $table->double('valor_fixo', 8, 2);
            $table->double('factor_mult', 8, 2);
            $table->unsignedInteger('plano_contas_id');
            $table->foreign('plano_contas_id')
                 ->references('id')->on('plano_contas')
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
