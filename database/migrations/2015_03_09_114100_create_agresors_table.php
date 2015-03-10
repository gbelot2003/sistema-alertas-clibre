<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgresorsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agresors', function(Blueprint $table)
		{
			$table->increments('id')->index();
			$table->integer('alertas_id')->unsigned()->index();
			$table->string('name');
			$table->integer('tipoagresors_id')->unsigned()->index();
			$table->integer('estadojudicials_id')->unsigned()->index();

			$table->foreign('alertas_id')
				->references('id')
				->on('alertas')
				->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agresors');
	}

}
