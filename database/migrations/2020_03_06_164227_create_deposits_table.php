<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateDepositsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('deposits', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('user_id')->unsigned()->index('deposits_user_id_foreign');
			$table->text('p_info', 65535)->nullable();
			$table->string('p_method');
			$table->string('currency');
			$table->float('amount');
			$table->date('send_date');
			$table->string('img_path', 191)->nullable();
			$table->integer('the_queue')->nullable();
			$table->boolean('urgent_verification')->default(0);
			$table->string('the_status', 191)->default('Open');
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
		Schema::drop('deposits');
	}

}
