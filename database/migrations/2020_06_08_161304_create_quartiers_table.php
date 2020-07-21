<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateQuartiersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('quartiers', function(Blueprint $table)
		{
			$table->integer('id_quartier', true);
			$table->string('nom_quartier', 50);
			$table->string('num_rue_quartier', 20);
			$table->integer('id_ville')->index('id_ville');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('quartiers');
	}

}
