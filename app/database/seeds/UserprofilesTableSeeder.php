<?php

class UserProfilesTableSeeder extends Seeder {

    public function run()
    {
        DB::table('user_profiles')->delete();

        UserProfile::create([
            'user_id' => 1,
            'name' => 'one'
        ]);

        UserProfile::create([
            'user_id' => 2,
            'name' => 'two'
        ]);

        UserProfile::create([
            'user_id' => 3,
            'name' => 'three'
        ]);

        UserProfile::create([
            'user_id' => 4,
            'name' => 'four'
        ]);
    }
}
