<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCampusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('campus', function(Blueprint $table)
		{
			$table->increments('id');
            $table->string('nombre')->unique();
            $table->string('direccion');
            $table->double('latitud')->unique();
            $table->double('longitud')->unique();
            $table->text('descripcion')->nullable();
            $table->integer('rut_encargado');
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
		Schema::drop('campus');
	}

}
