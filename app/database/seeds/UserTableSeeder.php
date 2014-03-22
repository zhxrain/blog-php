<?php
use Carbon\Carbon;

class UserTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();
        $users = array(
          array(
            'name' => 'admin',
            'email' => 'admin@example.org',
            'password' => Hash::make('admin'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ),
          array(
            'name'      => 'user',
            'email'      => 'user@example.org',
            'password'   => Hash::make('user'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          ),
          array(
            'name'      => 'user1',
            'email'      => 'user1@example.org',
            'password'   => Hash::make('123456'),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
          )
        );
        DB::table('users')->insert($users);
    }
}
