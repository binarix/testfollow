<?php

class UserprofilesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('userprofiles')->delete();

        Userprofile::create([
            'user_id' => 1,
            'name' => 'one'
        ]);

        Userprofile::create([
            'user_id' => 2,
            'name' => 'two'
        ]);

        Userprofile::create([
            'user_id' => 3,
            'name' => 'three'
        ]);

        Userprofile::create([
            'user_id' => 4,
            'name' => 'four'
        ]);
    }
}
