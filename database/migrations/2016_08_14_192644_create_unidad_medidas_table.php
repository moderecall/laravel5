<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUnidadMedidasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('unidad_medidas', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion')->unique();
			$table->string('siglas', 3);

			$table->integer('tipounidadmedida_id')->unsigned();
			$table->foreign('tipounidadmedida_id')
					->references('id')
					->on('tipo_unidad_medidas')
					->onDelete("cascade");

			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('unidad_medidas');
	}

}
