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
            ['artist_id' => 1, 'name' => str_random(30)],
            ['artist_id' => 1, 'name' => str_random(30)],
            ['artist_id' => 1, 'name' => str_random(30)],
            ['artist_id' => 1, 'name' => str_random(30)],
            ['artist_id' => 1, 'name' => str_random(30)],
        ]);
    }
}
