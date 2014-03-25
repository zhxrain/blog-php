<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class PostTableSeeder extends Seeder {

    public function run()
    {
        DB::table('posts')->delete();

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            $post = Post::create([
              'title' => $faker->sentence($nbWords = 6),
              'content' => $faker->text,
              'status' => 'published',
              'markdown' => '##Test',
              'created_at' => new DateTime,
              'updated_at' => new DateTime
              ]);
        }
    }

}
