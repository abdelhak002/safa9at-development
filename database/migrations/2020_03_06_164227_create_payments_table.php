<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePaymentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('payments', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('creator_id')->nullable();
			$table->integer('user_id')->unsigned()->index('payments_user_id_foreign');
			$table->integer('service_id')->unsigned()->index('payments_service_id_foreign');
			$table->integer('conversation_id');
			$table->integer('quantity')->default(1);
			$table->string('payment_method', 191);
			$table->string('currency');
			$table->float('price');
			$table->float('fees', 10, 0)->default(0);
			$table->float('total', 10, 0)->default(0);
			$table->integer('current_balance');
			$table->integer('new_balance');
			$table->string('the_status', 191)->default('open');
			$table->string('server_status')->nullable();
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
		Schema::drop('payments');
	}

}
