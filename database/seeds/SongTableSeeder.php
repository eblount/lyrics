<?php

use Illuminate\Database\Seeder;
use Lyrics\Album;

class SongTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker\Factory::create();
		$faker->seed(4321);

		foreach(Album::all() as $album) {
			for($i=0; $i<$faker->numberBetween(4,15); $i++) {
				$sentence = $faker->sentence($faker->numberBetween(2,8));
				\Lyrics\Song::create([
					'album_id' => $album->id,
					'name' => ucwords(substr($sentence, 0, strlen($sentence) - 1)),
					'lyrics' => implode("\n\n", $faker->sentences($faker->numberBetween(4, 20))),
					'run_time' => $faker->time(),
				]);
			}
		}
	}
}
