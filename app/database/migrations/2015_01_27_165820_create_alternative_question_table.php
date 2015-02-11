<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativeQuestionTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('alternative_question', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('alternative_id')->unsigned();
			$table->integer('question_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('alternative_question', function(Blueprint $table)
		{
			$table->foreign('alternative_id')->references('id')->on('alternatives')->onDelete('cascade');
			$table->foreign('question_id')->references('id')->on('questions')->onDelete('cascade');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::drop('alternative_question');
	}

}
