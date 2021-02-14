<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTitulosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Titulos', function (Blueprint $table) {
            $table->increments('idTitulo');
            $table->string('titulo',45);
            $table->string('titDes',100);
            $table->integer('idLey')->unsigned();
            $table->foreign('idLey')
                ->references('idLey')
                ->on('Leyes')
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
        Schema::dropIfExists('Titulos',function(Blueprint $table){
            $table->dropFpreign('Titulos_idLey_foreign');
        });
    }
}
