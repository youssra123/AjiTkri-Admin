<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOffresTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('offres', function(Blueprint $table)
		{
			$table->integer('id_offre', true);
			$table->date('date_offre');
			$table->float('prix_offre', 10, 0);
			$table->boolean('is_valid');
			$table->integer('id_detail')->index('id_detail');
			$table->integer('id_user')->index('id_user');
			$table->integer('id_logement')->index('id_logement');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('offres');
	}

}
