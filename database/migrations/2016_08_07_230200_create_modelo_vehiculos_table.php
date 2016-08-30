<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateModeloVehiculosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('modelo_vehiculos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descripcion')->unique();

			$table->integer('marca_id')->unsigned();
			$table->foreign('marca_id')
					->references('id')
					->on('marcas')
					->onDelete("cascade");

			$table->integer('tipovehiculo_id')->unsigned();
			$table->foreign('tipovehiculo_id')
					->references('id')
					->on('tipovehiculos')
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
		Schema::drop('modelo_vehiculos');
	}

}
