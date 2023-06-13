<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Choice2Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('choices_2')->insert([
            [
                'id' => 1,
                'question_id' => 1,
                'name' => 'サッカー',
                'valid' => 0
            ],
            [
                'id' => 2,
                'question_id' => 1,
                'name' => 'バスケ',
                'valid' => 1
            ],
            [
                'id' => 3,
                'question_id' => 1,
                'name' => '野球',
                'valid' => 0
            ],

            [
                'id' => 4,
                'question_id' => 2,
                'name' => '和田アキ子',
                'valid' => 0
            ],
            [
                'id' => 5,
                'question_id' => 2,
                'name' => 'BTS',
                'valid' => 0
            ],
            [
                'id' => 6,
                'question_id' => 2,
                'name' => 'YOASOBI',
                'valid' => 1
            ],
        ]);
    }
}
