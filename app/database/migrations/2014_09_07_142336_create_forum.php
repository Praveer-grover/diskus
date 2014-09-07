<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateForum extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users',function($table){
			$table->increments('uid');
			$table->string('username')->unique();
			$table->string('password');
			$table->string('full_name');
			$table->string('email')->unique();
			$table->integer('rating');			
			$table->rememberToken();
			$table->timestamps();
		});

		Schema::create('posts',function($table){
			$table->increments('pid');
			$table->integer('uid');
			$table->string('title');
			$table->text('description');
			$table->integer('rating');			
			$table->timestamps();
		});

		Schema::create('comments',function($table){
			$table->increments('cid');
			$table->integer('uid');
			$table->integer('pid');
			$table->text('reply');			
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
		//
		Schema::drop('comments');
		Schema::drop('posts');
		Schema::drop('users');
	}

}
