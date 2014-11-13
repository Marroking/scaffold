<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateIncidenceProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('incidence_products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('quantity');
			$table->integer('iva');
			$table->float('iva_price');
			$table->float('price');
			$table->boolean('required');
			$table->string('sales');
			$table->string('observations');
			$table->unsignedInteger('reject_id');
			//$table->foreign('reject_id')->references('id')->on('rejects');
			$table->unsignedInteger('product_id');
			//$table->foreign('product_id')->references('id')->on('products');
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
		Schema::drop('IncidenceProducts');
	}

}
