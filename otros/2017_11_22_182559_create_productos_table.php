<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('productos', function(Blueprint $table) {
            $table->increments('id');
            $table->string('codigo');
            $table->string('nombreproducto');
            $table->string('descripcion');
            $table->string('imagen');
            $table->string('categoria');
            $table->integer('stock');
            $table->integer('precio');
            $table->boolean('visible');
            $table->boolean('top');
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
		Schema::drop('productos');
	}

}
