<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLoyersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('loyers', function(Blueprint $table)
		{
			$table->foreign('id_promotion', 'loyers_ibfk_1')->references('id_promotion')->on('promotions')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_offre', 'loyers_ibfk_2')->references('id_offre')->on('offres')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('loyers', function(Blueprint $table)
		{
			$table->dropForeign('loyers_ibfk_1');
			$table->dropForeign('loyers_ibfk_2');
		});
	}

}
