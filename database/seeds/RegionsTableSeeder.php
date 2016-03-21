<?php

use App\Models\Region;
use Illuminate\Database\Seeder;

class RegionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Region::insert([
            ['id' => 1, 'name' => '北海道'],
            ['id' => 2, 'name' => '東北'],
            ['id' => 3, 'name' => '関東'],
            ['id' => 4, 'name' => '中部'],
            ['id' => 5, 'name' => '近畿'],
            ['id' => 6, 'name' => '中国'],
            ['id' => 7, 'name' => '四国'],
            ['id' => 8, 'name' => '九州'],
        ]);
    }
}
