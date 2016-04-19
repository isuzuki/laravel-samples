<?php

use App\Models\Order;
use App\Models\Photo;
use App\Models\Staff;
use Illuminate\Database\Seeder;

class PolymorphicPhotosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Order::insert([
            ['price' => 1000],
            ['price' => 2000],
            ['price' => 3000],
        ]);

        Staff::insert([
            ['name' => 'staff1'],
            ['name' => 'staff2'],
            ['name' => 'staff3'],
        ]);

        Photo::insert([
            [
                'path' => 'photo1',
                'imageable_id' => 1,
                'imageable_type' => 'App\Models\Order'
            ],
            [
                'path' => 'photo2',
                'imageable_id' => 1,
                'imageable_type' => 'App\Models\Staff'
            ],
        ]);
    }
}
