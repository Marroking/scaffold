<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductPriceListsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_price_lists', function(Blueprint $table)
		{
			$table->increments('id');
			$table->float('price');
			$table->date('effective_date');
			$table->unsignedInteger('product_id');
			//$table->foreign('product_id')->references('id')->on('products');
			$table->unsignedInteger('inventory_id');
			//$table->foreign('inventory_id')->references('id')->on('inventories');
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
		Schema::drop('ProductPriceLists');
	}

}
