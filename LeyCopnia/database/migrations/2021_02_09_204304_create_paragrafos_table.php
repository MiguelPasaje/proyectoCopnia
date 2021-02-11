<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateParagrafosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Paragrafos', function (Blueprint $table) {
            $table->integer("idParagrafo")->primary();
            $table->text('descripcion');
            $table->integer('idArticulo')->unsigned();
            $table->foreign('idArticulo')
                ->references('idArticulos')
                ->on('Articulos')
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
        Schema::dropIfExists('Paragrafos',function (Blueprint $table){
            $table->droForeign('Paragrafos_idArticulo_foreign');
        });
        
    }
}
