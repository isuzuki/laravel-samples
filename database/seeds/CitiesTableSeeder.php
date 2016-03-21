<?php

use App\Models\City;
use Illuminate\Database\Seeder;

class CitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        City::insert([
            // 北海道
            ['prefecture_id' => 1, 'name' => '札幌市'],
            ['prefecture_id' => 1, 'name' => '函館市'],
            ['prefecture_id' => 1, 'name' => '旭川市'],
        ]);
    }
}
