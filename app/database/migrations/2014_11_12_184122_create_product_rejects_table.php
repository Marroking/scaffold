<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductRejectsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('product_rejects', function(Blueprint $table)
		{
			$table->increments('id');
			$table->date('date');
			$table->float('amount_denied');
			$table->unsignedInteger('customer_id');
			//$table->foreign('customer_id')->references('id')->on('customers');
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
		Schema::drop('ProductRejects');
	}

}
