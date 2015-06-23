<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToEscuelasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('escuelas', function(Blueprint $table)
		{
			$table->foreign('departamento_id')->references('id')->on('departamentos');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('escuelas', function(Blueprint $table)
		{
			$table->dropForeign('escuelas_departamento_id_foreign');
		});
	}

}
