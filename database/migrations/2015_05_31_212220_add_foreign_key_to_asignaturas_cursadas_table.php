<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToAsignaturasCursadasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('asignaturas_cursadas', function(Blueprint $table)
		{
			$table->foreign('curso_id')->references('id')->on('cursos');
            $table->foreign('estudiante_id')->references('id')->on('estudiantes');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('asignaturas_cursadas', function(Blueprint $table)
		{
			$table->dropForeign('asignaturas_cursadas_curso_id_foreign');
            $table->dropForeign('asignaturas_cursadas_estudiante_id_foreign');
		});
	}

}
