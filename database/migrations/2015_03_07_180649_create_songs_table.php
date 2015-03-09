<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSongsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('songs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('album_id')->unsigned();
			$table->string('name');
			$table->text('lyrics');
			$table->time('run_time');
			$table->timestamps();
			$table->foreign('album_id')->references('id')->on('albums');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('songs');
	}

}
