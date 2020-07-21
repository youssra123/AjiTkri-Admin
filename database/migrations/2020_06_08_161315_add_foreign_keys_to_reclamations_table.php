<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToReclamationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('reclamations', function(Blueprint $table)
		{
			$table->foreign('id_client', 'reclamations_ibfk_1')->references('id_user')->on('user')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('reclamations', function(Blueprint $table)
		{
			$table->dropForeign('reclamations_ibfk_1');
		});
	}

}
