<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id')->unique()->primary();
            
            $table->date('fecha');
            $table->integer('bano');
            $table->integer('dormitorio');
            $table->float('m2', 5, 2);
            $table->integer('estacionamiento');
            $table->string('ciudad', 15);
            $table->float('valor', 5, 2);
            $table->string('tipo', 12);
            $table->string('negocio', 8);
            $table->float('valor', 5, 2);
            $table->text('descripcion');
            $table->boolean('estado');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}
