<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCotizacionsTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('cotizacions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('usuario_ID')->nullable();
			$table->string('piso')->nullable();
			$table->string('techo')->nullable();
			$table->string('vidrio')->nullable();
			$table->string('cielo_razo')->nullable();
			$table->integer('estimado')->nullable();
			$table->integer('modelo_ID')->nullable();
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
		Schema::drop('cotizacions');
	}

}
