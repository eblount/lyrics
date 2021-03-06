<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

		$this->call('ArtistTableSeeder');
		$this->call('AlbumTableSeeder');
		$this->call('SongTableSeeder');
	}

}
