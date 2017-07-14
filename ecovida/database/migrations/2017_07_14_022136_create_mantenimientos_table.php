<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMantenimientosTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mantenimientos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha')->nullable();
			$table->integer('estado')->nullable();
			$table->text('descripcion')->nullable();
			$table->string('responsable')->nullable();
			$table->integer('compra_producto_producto_ID')->nullable();
			$table->integer('compra_producto_compra_codigo')->nullable();
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
		Schema::drop('mantenimientos');
	}

}
