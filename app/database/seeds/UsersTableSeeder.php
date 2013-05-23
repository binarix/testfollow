<?php

class UsersTableSeeder extends Seeder {

    public function run()
    {
        DB::table('users')->delete();

        User::create([
            'email' => 'one@test.com'
        ]);

        User::create([
            'email' => 'two@test.com'
        ]);

        User::create([
            'email' => 'three@test.com'
        ]);

        User::create([
            'email' => 'four@test.com'
        ]);
    }
}