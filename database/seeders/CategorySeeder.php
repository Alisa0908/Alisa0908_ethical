<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if (!DB::table('categories')->first()) {
            DB::table('categories')->insert([
                ['name' => '日用品'],
                ['name' => '美容品'],
                ['name' => '衣類'],
                ['name' => '電化製品'],
                ['name' => '食品'],
            ]);
        }
    }
}
