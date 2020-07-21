<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToOffresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('offres', function(Blueprint $table)
		{
			$table->foreign('id_detail', 'offres_ibfk_1')->references('id_detail')->on('details')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('offres', function(Blueprint $table)
		{
			$table->dropForeign('offres_ibfk_1');
		});
	}

}
