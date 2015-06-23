<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToSalasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('salas', function(Blueprint $table)
		{
			$table->foreign('campus_id')->references('id')->on('campus');
            $table->foreign('tipo_sala_id')->references('id')->on('tipos_salas');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('salas', function(Blueprint $table)
		{
			$table->dropForeign('salas_campus_id_foreign');
            $table->dropForeign('salas_tipo_sala_id_foreign');
		});
	}

}
