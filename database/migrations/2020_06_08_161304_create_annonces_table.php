<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAnnoncesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('annonces', function(Blueprint $table)
		{
			$table->integer('id_annonce');
			$table->date('date_annonce');
			$table->string('titre_annonce', 50);
			$table->string('description_annonce', 200);
			$table->boolean('is_valid');
			$table->integer('id_user')->index('id_client');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('annonces');
	}

}
