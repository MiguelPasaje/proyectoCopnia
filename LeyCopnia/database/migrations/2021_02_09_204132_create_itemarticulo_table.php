<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemarticuloTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Items', function (Blueprint $table) {
            $table->integer('idItem')->primary();
            $table->text('descripcion');
            $table->integer('idArticulo')->unsigned();
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
        Schema::dropIfExists('Items',function (Blueprint $table){
            $table->droForeign('Items_idArticulo_foreign');
        });
        
    }
}
