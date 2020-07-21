<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToLogementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('logements', function(Blueprint $table)
		{
			$table->foreign('id_type', 'logements_ibfk_1')->references('id_type')->on('types')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_quartier', 'logements_ibfk_2')->references('id_quartier')->on('quartiers')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('id_etat', 'logements_ibfk_3')->references('id_etat')->on('etats')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('logements', function(Blueprint $table)
		{
			$table->dropForeign('logements_ibfk_1');
			$table->dropForeign('logements_ibfk_2');
			$table->dropForeign('logements_ibfk_3');
		});
	}

}
