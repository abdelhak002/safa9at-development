<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->string('name', 191);
			$table->date('birthday')->nullable();
			$table->string('address', 900)->nullable();
			$table->integer('seriousness')->default(0);
			$table->integer('phone')->nullable();
			$table->string('phone_country', 2)->nullable();
			$table->string('email', 191);
			$table->string('avatar', 191)->nullable()->default('users/default.png');
			$table->dateTime('email_verified_at')->nullable();
			$table->string('password', 191);
			$table->string('remember_token', 100)->nullable();
			$table->string('lang')->default('en');
			$table->string('img_path', 800)->default('/img/profiles/default-account.jpg');
			$table->timestamps();
			$table->boolean('is_admin')->default(0);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}
