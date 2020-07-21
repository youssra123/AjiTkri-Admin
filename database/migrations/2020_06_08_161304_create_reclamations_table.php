<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateReclamationsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('reclamations', function(Blueprint $table)
		{
			$table->integer('id_reclamation', true);
			$table->string('sujet_reclamation', 200);
			$table->boolean('is_valid');
			$table->integer('id_client')->index('id_client');
			$table->integer('id_offre')->unique('id_offre');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('reclamations');
	}

}
