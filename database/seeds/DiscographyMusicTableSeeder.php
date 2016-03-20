<?php

use App\Models\Pivots\DiscographyMusic;
use Illuminate\Database\Seeder;

class DiscographyMusicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('discography_music')->insert([
            ['discography_id' => 1, 'music_id' => 1, 'track_no' => 1],
            ['discography_id' => 1, 'music_id' => 2, 'track_no' => 2],
            ['discography_id' => 3, 'music_id' => 3, 'track_no' => 1],
        ]);
    }
}
