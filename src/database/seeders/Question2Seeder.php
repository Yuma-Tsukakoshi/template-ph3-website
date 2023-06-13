<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Question2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('questions_2')->insert([
            [
                'id' => 1,
                'content' => '僕が好きなスポーツは？',
                'image' => 'img-quiz01.png',
                'supplement' => '経済産業省 2023年6月',
                'quiz_id' => 2,
            ],
            [
                'id' => 2,
                'content' => '僕が好きなアーティストは？',
                'image' => 'img-quiz02.png',
                'supplement' => '',
                'quiz_id' => 2,
            ],
        ]);
    }
}
