<?php

use Illuminate\Database\Seeder;
use Lyrics\Artist;

class ArtistTableSeeder extends Seeder
{
	public function run()
	{
		$faker = Faker\Factory::create();
		$faker->seed(4321);

		for($i=0; $i<100; $i++) {
			Artist::create([
				'name' => $faker->name,
			]);
		}
	}
}
