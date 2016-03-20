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
            ['name' => 'artist1'],
            ['name' => 'artist2'],
            ['name' => 'artist3'],
        ]);
    }
}
