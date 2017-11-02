<?php

use Illuminate\Database\Seeder;
use App\Video;

class VideosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      $faker = Faker\Factory::create();
      for($i = 1; $i < 6; $i++) {
        $video = [
          'title' => $faker->sentence($faker->numberBetween(3, 5)),
          'url' => $faker->url(),
          'description' => $faker->realText(120),
        ];
        Video::create($video);
      }
    }
}
