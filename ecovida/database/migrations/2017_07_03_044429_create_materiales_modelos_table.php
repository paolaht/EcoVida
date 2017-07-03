<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMaterialesModelosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('materiales_modelos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('modelo');
			$table->string('categoria');
			$table->string('material');
			$table->integer('precio');
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
		Schema::drop('materiales_modelos');
	}

}
