<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Question>
 */
class QuestionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'content'=>fake()->realText(50),
            'image'=>fake()->realText(10),
            'supplement'=>fake()->realText(20),
            'quiz_id'=>fake()->numberBetween(1,2),
        ];
    }
}
