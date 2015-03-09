<?php

use Illuminate\Database\Seeder;
use Lyrics\Artist;

class AlbumTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker\Factory::create();
		$faker->seed(4321);

		foreach(Artist::all() as $artist) {
			for($i=0; $i<$faker->numberBetween(1,10); $i++) {
				$sentence = $faker->sentence($faker->numberBetween(1,5));
				\Lyrics\Album::create([
					'artist_id' => $artist->id,
					'name' => ucwords(substr($sentence, 0, strlen($sentence) - 1)),
					'release_date' => $faker->dateTimeThisCentury,
				]);
			}
		}
	}
}
