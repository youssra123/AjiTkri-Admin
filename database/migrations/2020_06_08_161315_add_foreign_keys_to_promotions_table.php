<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToPromotionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('promotions', function(Blueprint $table)
		{
			$table->foreign('id_saison', 'promotions_ibfk_1')->references('id_saison')->on('saisons')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('promotions', function(Blueprint $table)
		{
			$table->dropForeign('promotions_ibfk_1');
		});
	}

}
