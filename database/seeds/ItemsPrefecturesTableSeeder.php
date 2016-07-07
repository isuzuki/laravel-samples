<?php

use App\Models\Item;
use App\Models\Prefecture;
use Illuminate\Database\Seeder;

class ItemsPrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('item_prefecture')->insert([
            'item_id' => 1,
            'prefecture_id' => 1,
            'title' => 'item1-prefecture1',
        ]);
        \DB::table('item_prefecture')->insert([
            'item_id' => 2,
            'prefecture_id' => 1,
            'title' => 'item1-prefecture1',
        ]);
        \DB::table('item_prefecture')->insert([
            'item_id' => 3,
            'prefecture_id' => 1,
            'title' => 'item3-prefecture1',
        ]);
        \DB::table('item_prefecture')->insert([
            'item_id' => 1,
            'prefecture_id' => 2,
            'title' => 'item1-prefecture2',
        ]);
        \DB::table('item_prefecture')->insert([
            'item_id' => 2,
            'prefecture_id' => 2,
            'title' => 'item2-prefecture2',
        ]);
    }
}
