<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->bigInteger('id', true)->unsigned();
			$table->integer('user_id')->unsigned()->index('messages_user_id_foreign');
			$table->integer('conversation_id')->unsigned()->index('messages_conversation_id_foreign');
			$table->string('the_type', 191)->default('message');
			$table->text('content', 65535);
			$table->integer('seen_by_sender')->default(0);
			$table->integer('seen_by_receiver')->default(0);
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
		Schema::drop('messages');
	}

}
