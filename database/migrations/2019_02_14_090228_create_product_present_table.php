<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductPresentTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product_present', function (Blueprint $table) {
            $table->increments('id');

            /*
            *   Creacion de llaves foraneas con tabla productos.
            */

            $table->unsignedInteger('producto_id');
            $table->foreign('producto_id')->references('id')->on('productos')->onDelete('cascade');

            /*
            *   Creacion de llaves foraneas con tabla presentaciones.
            */

            $table->unsignedInteger('presentacion_id');
            $table->foreign('presentacion_id')->references('id')->on('presentaciones')->onDelete('cascade');

            $table->integer('costo');

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
        Schema::dropIfExists('product_present');
    }
}
