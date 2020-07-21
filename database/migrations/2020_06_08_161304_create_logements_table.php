<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateLogementsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('logements', function(Blueprint $table)
		{
			$table->integer('id_logement', true);
			$table->integer('nbr_pieces_logement');
			$table->float('surface_logement', 10, 0);
			$table->boolean('disponibilite_logement');
			$table->boolean('meuble');
			$table->boolean('is_valid');
			$table->integer('id_type')->index('id_type');
			$table->integer('id_quartier')->index('id_quartier');
			$table->integer('id_etat')->index('id_etat');
			$table->integer('id_client')->index('id_client');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('logements');
	}

}
