<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateServicesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('services', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('creator_id')->nullable();
			$table->string('title', 191);
			$table->text('description', 65535);
			$table->string('category');
			$table->string('sub_category');
			$table->float('price', 10, 0);
			$table->float('fees', 10, 0)->default(0);
			$table->string('p_method', 191);
			$table->string('currency', 191);
			$table->string('pm_slug', 191)->nullable();
			$table->string('duration', 11);
			$table->integer('purchases_number')->default(0);
			$table->integer('remaining')->default(1);
			$table->string('img_path', 191);
			$table->integer('num_raters')->default(0);
			$table->integer('num_stars')->default(0);
			$table->string('the_status', 191)->default('open');
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('services');
	}

}