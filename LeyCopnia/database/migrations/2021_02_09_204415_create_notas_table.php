<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNotasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Notas', function (Blueprint $table) {
            $table->integer('idNota')->primary();
            $table->text('nota');
            $table->integer('idItem')->nullable();
            $table->foreign('idItem')
                ->references('idItem')
                ->on('Items')
                ->onDelete('cascade');
            $table->integer('idArticulo')->nullable();
            $table->foreign('idArticulo')
                ->references('idArticulo')
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
        Schema::dropIfExists('Notas',function (Blueprint $table){
            $table->dropForeign('Notas_idArticulo_foreign');
            $table->dropForeign('Notas_idItem_foreign');
        });
        
    }
}
