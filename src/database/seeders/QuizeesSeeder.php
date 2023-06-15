<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class QuizeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('quizzes')->insert([
            [
                'id' => 1,
                'name' => 'ITクイズ',
            ],
            [
                'id' => 2,
                'content' => '自己紹介クイズ',
            ],
        ]);
    }
}
