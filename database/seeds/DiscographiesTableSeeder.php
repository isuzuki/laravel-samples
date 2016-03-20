<?php

use App\Models\Discography;
use Illuminate\Database\Seeder;

class DiscographiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discography::insert([
            ['artist_id' => 1, 'name' => 'artist1_discography1'],
            ['artist_id' => 1, 'name' => 'artist1_discography2'],
            ['artist_id' => 2, 'name' => 'artist2_discography1'],
        ]);
    }
}
