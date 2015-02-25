<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlternativesTable extends Migration {

	/**
	* Run the migrations.
	*
	* @return void
	*/
	public function up()
	{
		Schema::create('alternatives', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('text')->unique();
			$table->integer('question_id')->unsigned()->nullable();
			$table->timestamps();
		});
		Schema::table('alternatives', function(Blueprint $table)
		{
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
		Schema::drop('alternatives');
	}

}
