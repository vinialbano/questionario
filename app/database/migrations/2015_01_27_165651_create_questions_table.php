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
			$table->text('text');
			$table->boolean('multianswer');
			$table->boolean('allow_other');
			$table->string('other_text')->nullable();
			$table->integer('scene')->unsigned();
			$table->boolean('has_jump')->default(false);
			$table->integer('alternative_id')->unsigned()->nullable();
			$table->integer('jump_to')->unsigned()->nullable();
            $table->boolean('has_image')->default(false);
            $table->text('image');
			$table->timestamps();
		});
		Schema::table('questions', function(Blueprint $table)
		{
			$table->foreign('jump_to')->references('id')->on('questions')->onDelete('cascade');
			$table->foreign('alternative_id')->references('id')->on('alternatives')->onDelete('cascade');
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
