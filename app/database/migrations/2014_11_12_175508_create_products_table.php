<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('nameProduct');
			$table->string('ABCNacional');
			$table->unsignedInteger('family_id');
			//$table->foreign('family_id')->references('id')->on('families');
			$table->unsignedInteger('sector_id');
			//$table->foreign('IdSector')->references('id')->on('sectors');
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
		Schema::drop('Products');
	}

}
