<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class IngredientsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('ingredients')->insert([
                 [            
                    'name' => '豚ひき肉',
                    'categories_id' => 1,
                 ],[ 
                     'name' =>'豚こま切れ肉',
                     'categories_id' => 1,
                 ],[ 
                     'name' =>'豚しゃぶしゃぶ用肉',
                     'categories_id' => 1,
                 ],[ 
                     'name' =>'鶏ひき肉',
                     'categories_id' => 1,
                 ],[ 
                     'name' =>'鶏もも肉',
                     'categories_id' => 1,
                 ],[ 
                     'name' =>'鶏むね肉',
                     'categories_id' => 1,
                 ],[ 
                     'name' =>'鶏ささみ肉',
                     'categories_id' => 1,
                 ],[ 
                     'name' =>'牛ひき肉',
                     'categories_id' => 1,
                 ],[ 
                     'name' =>'牛こま切れ肉',
                     'categories_id' => 1,
                 ],[ 
                     'name' =>'牛しゃぶしゃぶ用肉',
                     'categories_id' => 1,
                 ],[ 
                     'name' =>'鮭',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'あじ',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'さば',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'えび',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'いか',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'たこ',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'ししゃも',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'かつお',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'まぐろ',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'あさり',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'明太子',
                     'categories_id' => 2,
                 ],[ 
                     'name' =>'キャベツ',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'にんじん',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'大根',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'玉ねぎ',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'じゃがいも',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'きゅうり',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'トマト',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'ねぎ',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'ブロッコリー',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'ピーマン',
                     'categories_id' => 3,
                 ],[ 
                     'name' =>'豆腐',
                     'categories_id' => 4,
                 ],[ 
                     'name' =>'油揚げ',
                     'categories_id' => 4,
                 ],[ 
                     'name' =>'こんにゃく',
                     'categories_id' => 4,
                 ],[ 
                     'name' =>'はるさめ',
                     'categories_id' => 4,
                 ],[ 
                     'name' =>'ちくわ',
                     'categories_id' => 4,
                 ],[ 
                     'name' =>'わかめ',
                     'categories_id' => 4,
                 ],[ 
                     'name' =>'ひじき',
                     'categories_id' => 4,
                 ],[ 
                     'name' =>'のり',
                     'categories_id' => 4,
                 ],[ 
                     'name' =>'たまご',
                     'categories_id' => 4,
                 ],[ 
                     'name' =>'チーズ',
                     'categories_id' => 4,
                ],
            
            ]);
    }
}
