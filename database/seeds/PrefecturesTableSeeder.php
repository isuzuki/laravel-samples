<?php

use App\Models\Prefecture;
use Illuminate\Database\Seeder;

class PrefecturesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Prefecture::insert([
            // 北海道
            ['id' => 1, 'region_id' => 1, 'name' => '北海道'],

            // 東北
            ['id' => 2, 'region_id' => 2, 'name' => '青森'],
            ['id' => 3, 'region_id' => 2, 'name' => '岩手'],
            ['id' => 4, 'region_id' => 2, 'name' => '秋田'],
            ['id' => 5, 'region_id' => 2, 'name' => '宮城'],
            ['id' => 6, 'region_id' => 2, 'name' => '山形'],
            ['id' => 7, 'region_id' => 2, 'name' => '福島'],

            // 関東
            ['id' => 8, 'region_id' => 3, 'name' => '茨城'],
            ['id' => 9, 'region_id' => 3, 'name' => '栃木'],
            ['id' => 10, 'region_id' => 3, 'name' => '群馬'],
            ['id' => 11, 'region_id' => 3, 'name' => '埼玉'],
            ['id' => 12, 'region_id' => 3, 'name' => '千葉'],
            ['id' => 13, 'region_id' => 3, 'name' => '東京'],
            ['id' => 14, 'region_id' => 3, 'name' => '神奈川'],

            // 中部
            ['id' => 15, 'region_id' => 4, 'name' => '山梨'],
            ['id' => 16, 'region_id' => 4, 'name' => '長野'],
            ['id' => 17, 'region_id' => 4, 'name' => '新潟'],
            ['id' => 18, 'region_id' => 4, 'name' => '富山'],
            ['id' => 19, 'region_id' => 4, 'name' => '石川'],
            ['id' => 20, 'region_id' => 4, 'name' => '福井'],
            ['id' => 21, 'region_id' => 4, 'name' => '静岡'],
            ['id' => 22, 'region_id' => 4, 'name' => '愛知'],
            ['id' => 23, 'region_id' => 4, 'name' => '岐阜'],

            // 近畿
            ['id' => 24, 'region_id' => 5, 'name' => '三重'],
            ['id' => 25, 'region_id' => 5, 'name' => '滋賀'],
            ['id' => 26, 'region_id' => 5, 'name' => '京都'],
            ['id' => 27, 'region_id' => 5, 'name' => '大阪'],
            ['id' => 28, 'region_id' => 5, 'name' => '兵庫'],
            ['id' => 29, 'region_id' => 5, 'name' => '奈良'],
            ['id' => 30, 'region_id' => 5, 'name' => '和歌山'],

            // 中国
            ['id' => 31, 'region_id' => 6, 'name' => '鳥取'],
            ['id' => 32, 'region_id' => 6, 'name' => '島根'],
            ['id' => 33, 'region_id' => 6, 'name' => '岡山'],
            ['id' => 34, 'region_id' => 6, 'name' => '広島'],
            ['id' => 35, 'region_id' => 6, 'name' => '山口'],

            // 四国
            ['id' => 36, 'region_id' => 7, 'name' => '香川'],
            ['id' => 37, 'region_id' => 7, 'name' => '愛媛'],
            ['id' => 38, 'region_id' => 7, 'name' => '徳島'],
            ['id' => 39, 'region_id' => 7, 'name' => '高知'],

            // 九州
            ['id' => 40, 'region_id' => 8, 'name' => '福岡'],
            ['id' => 41, 'region_id' => 8, 'name' => '佐賀'],
            ['id' => 42, 'region_id' => 8, 'name' => '長崎'],
            ['id' => 43, 'region_id' => 8, 'name' => '熊本'],
            ['id' => 44, 'region_id' => 8, 'name' => '大分'],
            ['id' => 45, 'region_id' => 8, 'name' => '宮崎'],
            ['id' => 46, 'region_id' => 8, 'name' => '鹿児島'],
            ['id' => 47, 'region_id' => 8, 'name' => '沖縄'],
        ]);
    }
}
