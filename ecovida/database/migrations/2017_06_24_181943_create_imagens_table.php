<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagensTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imagens', function(Blueprint $table)
		{

            $table->increments('id');
            $table->integer('product_id')->unsigned();
            $table->foreign('product_id')->references('id')->on('productos');
            $table->string('filename');
            $table->timestamps();

	//		$table->increments('id');
	//		$table->string('imagen');
	//		$table->integer('producto_ID');
	//		$table->integer('modelo_ID');
	//		$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('imagens');
	}

}
