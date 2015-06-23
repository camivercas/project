<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToHorariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('horarios', function(Blueprint $table)
		{
			$table->foreign('sala_id')->references('id')->on('salas');
            $table->foreign('periodo_id')->references('id')->on('periodos');
            $table->foreign('curso_id')->references('id')->on('cursos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('horarios', function(Blueprint $table)
		{
			$table->dropForeign('horarios_sala_id_foreign');
            $table->dropForeign('horarios_periodo_id_foreign');
            $table->dropForeign('horarios_curso_id_foreign');
		});
	}

}
