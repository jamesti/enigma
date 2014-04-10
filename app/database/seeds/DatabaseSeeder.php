<?php

class DatabaseSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        Eloquent::unguard();

        $this->call('UserTableSeeder');
        $this->command->info('User table seeded!');
    }

}

class UserTableSeeder extends Seeder {

    public function run() {
        $hashed = Hash::make('secret');
        DB::table('users')->insert(
                array('username' => 'James', 'email' =>
                      'james@gmail.com', 'password' => $hashed), 
                array('username' => 'Steve', 'email' =>
                      'stever@yahoo.com', 'password' => $hashed)
        );
    }

}
