<?php

use App\Models\Artist;
use Illuminate\Database\Seeder;

class ArtistsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Artist::insert([
            ['name' => str_random(30)],
            ['name' => str_random(30)],
            ['name' => str_random(30)],
            ['name' => str_random(30)],
            ['name' => str_random(30)],
        ]);
    }
}
