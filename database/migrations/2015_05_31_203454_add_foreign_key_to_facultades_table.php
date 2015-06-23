<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToFacultadesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('facultades', function(Blueprint $table)
		{
			$table->foreign('campus_id')->references('id')->on('campus');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('facultades', function(Blueprint $table)
		{
			$table->dropForeign('facultades_campus_id_foreign');
		});
	}

}
