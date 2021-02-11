<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Articulos', function (Blueprint $table) {
            $table->increments('idArticulo');
            $table->text('articulo');
            $table->text('descripcion');
            $table->integer('idCapitulo')->unsigned();
            $table->foreign('idCapitulo')
                ->references('idCapitulo')
                ->on('Capitulos')
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
        Schema::dropIfExists('Articulos',function(Blueprint $table){
            $table->dropForeign('Articulos_idCapitulo_foreign');
        });
        
    }
}
