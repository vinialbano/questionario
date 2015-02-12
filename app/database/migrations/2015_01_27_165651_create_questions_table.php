<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateQuestionsTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('questions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('text');
			$table->string('display_text');
			$table->boolean('multianswer');
			$table->boolean('allow_other');
			$table->string('other_text')->nullable();
			$table->integer('scene')->unsigned();
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
		Schema::drop('questions');
	}


}
