<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateComprasTable extends Migration
{

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('compras', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('fecha')->nullable();
			$table->integer('usuarios_ID')->nullable();
			$table->boolean('cancelado')->nullable();
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
		Schema::drop('compras');
	}

}
