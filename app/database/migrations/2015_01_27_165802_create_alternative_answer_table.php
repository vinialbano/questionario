<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativeAnswerTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('alternative_answer', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('alternative_id')->unsigned();
			$table->integer('answer_id')->unsigned();
			$table->timestamps();
		});

		Schema::table('alternative_answer', function(Blueprint $table)
		{
			$table->foreign('alternative_id')->references('id')->on('alternatives')->onDelete('cascade');
			$table->foreign('answer_id')->references('id')->on('answers')->onDelete('cascade');
		});
	}

	/**
	* Reverse the migrations.
	*
	* @return void
	*/
	public function down()
	{
		Schema::drop('alternative_answer');
	}

}
