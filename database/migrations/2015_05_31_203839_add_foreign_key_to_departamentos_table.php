<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToDepartamentosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('departamentos', function(Blueprint $table)
		{
			$table->foreign('facultad_id')->references('id')->on('facultades');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('departamentos', function(Blueprint $table)
		{
			$table->dropForeign('departamentos_facultad_id_foreign');
		});
	}

}
