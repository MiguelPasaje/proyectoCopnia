<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCapitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Capitulos', function (Blueprint $table) {
            $table->integer('idCapitulo')->primary();
            $table->string('capitulo',45);
            $table->string('descripcion',100);
            $table->integer('idTitulo')->unsigned();
            $table->foreign('idTituloo')
                ->references('idTitulo')
                ->on('Titulos')
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
        Schema::dropIfExists('Capitulos',function(Blueprint $table){
            $table->dropForeign('Capitulos_idTitulo_foreign');
        });
        
    }
}
