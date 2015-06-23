<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToEstudiantesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('estudiantes', function(Blueprint $table)
		{
			$table->foreign('carrera_id')->references('id')->on('carreras');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('estudiantes', function(Blueprint $table)
		{
			$table->dropForeign('estudiantes_carrera_id_foreign');
		});
	}

}
