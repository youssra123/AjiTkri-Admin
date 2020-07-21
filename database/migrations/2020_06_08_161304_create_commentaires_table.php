<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCommentairesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('commentaires', function(Blueprint $table)
		{
			$table->integer('id_commentaire', true);
			$table->string('contenu_commentaire', 200);
			$table->boolean('is_valid');
			$table->integer('id_offre')->index('id_offre');
			$table->integer('id_user')->index('id_user');
			$table->integer('is_offre');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('commentaires');
	}

}
