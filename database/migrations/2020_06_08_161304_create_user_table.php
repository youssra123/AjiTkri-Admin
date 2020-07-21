<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user', function(Blueprint $table)
		{
			$table->integer('id_user', true);
			$table->text('nom_user', 65535);
			$table->text('prenom_user', 65535);
			$table->string('email_user', 150)->unique('email_user');
			$table->text('pwd_user', 65535);
			$table->text('telephone_user', 65535);
			$table->text('image_user')->nullable();
			$table->string('type_user', 30);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
