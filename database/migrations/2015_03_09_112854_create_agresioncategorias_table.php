<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgresioncategoriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agresioncategorias', function(Blueprint $table)
		{
			$table->increments('id')->index();
			$table->string('agresioncategoria');
			$table->string('tipoagresions_id');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agresioncategorias');
	}

}
