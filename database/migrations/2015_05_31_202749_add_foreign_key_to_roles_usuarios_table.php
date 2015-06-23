<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddForeignKeyToRolesUsuariosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('roles_usuarios', function(Blueprint $table)
		{
			$table->foreign('rol_id')->references('id')->on('roles');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('roles_usuarios', function(Blueprint $table)
		{
			$table->dropForeign('roles_usuarios_rol_id_foreign');
		});
	}

}
