<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLoyersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('loyers', function(Blueprint $table)
		{
			$table->float('montant_loyer', 10, 0);
			$table->float('taux_promotion', 10, 0);
			$table->integer('id_offre')->index('id_offre');
			$table->integer('id_promotion')->index('id_promotion');
			$table->primary(['id_offre','id_promotion']);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('loyers');
	}

}
