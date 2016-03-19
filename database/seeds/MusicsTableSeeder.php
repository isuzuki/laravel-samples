<?php

use App\Models\Music;
use Illuminate\Database\Seeder;

class MusicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Music::insert([
            ['artist_id' => 1, 'name' => str_random(30)],
            ['artist_id' => 1, 'name' => str_random(30)],
            ['artist_id' => 1, 'name' => str_random(30)],
            ['artist_id' => 1, 'name' => str_random(30)],
            ['artist_id' => 1, 'name' => str_random(30)],
        ]);
    }
}
