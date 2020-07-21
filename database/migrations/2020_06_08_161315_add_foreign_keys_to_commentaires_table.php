<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToCommentairesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('commentaires', function(Blueprint $table)
		{
			$table->foreign('id_offre', 'commentaires_ibfk_1')->references('id_offre')->on('offres')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('commentaires', function(Blueprint $table)
		{
			$table->dropForeign('commentaires_ibfk_1');
		});
	}

}
