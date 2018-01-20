<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->increments('id');

            $table->string('name'); // nombre 
            $table->string('description'); // descripcion 
            $table->text('long_description')->nullable();// descripcion larga 
            $table->float('price');// precio 
            
            // de esta manera se establece la clave foranea en de la tabla categories

            $table->integer('category_id')->unsigned()->nullable(); // se crea la columna

            $table->foreign('category_id')->references('id')->on('categories'); // esta la hace foranea




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
        Schema::dropIfExists('products');
    }
}
