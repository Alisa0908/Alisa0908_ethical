<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EthicalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ethicals')->insert([
            [
                'name' => 'MEGURU 竹の歯ブラシ（ひまし樹脂毛）',
                'company' => 'ファイン株式会社',
                'price' => 715,
                'image_url' => 'https://www.fine-revolution.co.jp/archives/002/202104/large-60892d8e091a3.jpg',
                'goods_url' => 'https://www.fine-revolution.co.jp/commodity/toothbrush/entry-680.html',
                'category_id' => 1,
                'materials' => '歯ブラシの柄の部分 = ポリ乳酸樹脂×竹の微粉末､ブラシ部分 = トウゴマの種子から作られる､ひまし樹脂毛',
                'logistics' => 'すべて国内工場で生産されています'
            ],
        ]);
    }
}
