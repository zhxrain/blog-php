<?php

// Composer: "fzaninotto/faker": "v1.3.0"
use Faker\Factory as Faker;

class CommentTableSeeder extends Seeder {

    public function run()
    {
        DB::table('comments')->delete();

        $faker = Faker::create();

        foreach(range(1, 10) as $index)
        {
            Comment::create([
              'author' => $faker->username,
              'content' => $faker->text,
              'post_id' => Post::first()->id,
              'created_at' => new DateTime,
              'updated_at' => new DateTime
            ]);
        }
    }
}
