<?php

use App\Models\Item;
use App\Models\Site;
use Illuminate\Database\Seeder;

class ItemsSitesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::insert([
            ['name' => 'item1'],
            ['name' => 'item2'],
            ['name' => 'item3'],
            ['name' => 'item4'],
            ['name' => 'item5'],
        ]);

        Site::insert([
            ['name' => 'サイト1'],
            ['name' => 'サイト2'],
        ]);

        \DB::table('item_site')->insert(['site_id' => 1, 'item_id' => 1]);
        \DB::table('item_site')->insert(['site_id' => 1, 'item_id' => 2]);
        \DB::table('item_site')->insert(['site_id' => 1, 'item_id' => 3]);
        \DB::table('item_site')->insert(['site_id' => 2, 'item_id' => 1]);
        \DB::table('item_site')->insert(['site_id' => 2, 'item_id' => 4]);
        \DB::table('item_site')->insert(['site_id' => 2, 'item_id' => 5]);
    }
}
