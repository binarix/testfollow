<?php

class RelationshipsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('relationships')->delete();

        Relationship::create([
            'follower_id' => 1,
            'followed_id' => 2,
        ]);

        Relationship::create([
            'follower_id' => 1,
            'followed_id' => 3,
        ]);

        Relationship::create([
            'follower_id' => 4,
            'followed_id' => 2,
        ]);

        Relationship::create([
            'follower_id' => 2,
            'followed_id' => 1,
        ]);

        Relationship::create([
            'follower_id' => 2,
            'followed_id' => 3,
        ]);
    }
}
