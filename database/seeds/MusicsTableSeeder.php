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
            ['artist_id' => 1, 'name' => 'artist1_music1'],
            ['artist_id' => 1, 'name' => 'artist1_music2'],
            ['artist_id' => 2, 'name' => 'artist2_music1'],
        ]);
    }
}
