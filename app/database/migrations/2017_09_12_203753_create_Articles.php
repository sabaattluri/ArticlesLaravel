<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\c\Migrations\Migration;

class CreateArticles extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('Articles',function(Blueprint $newtable)
		{
			$newtable->increments('id');
			$newtable->string('name');
			$newtable->text('description');
			$newtable->string('URL');
			$newtable->text('image');
			$newtable->enum('status',array('draft', 'published'));
			$newtable->timestamps();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('Articles');
		
	}

}
