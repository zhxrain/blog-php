<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
    Eloquent::unguard();

    $this->call('PostTableSeeder');
    $this->command->info('Post table seeded!');

    $this->call('CommentTableSeeder');
    $this->command->info('Comment table seeded!');

    $this->call('UserTableSeeder');
    $this->command->info('User table seeded!');
	}

}
