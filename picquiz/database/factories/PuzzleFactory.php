<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Puzzle>
 */
class PuzzleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
			'picture' => Str::random(10),
			'answer' => Str::random(6),
			'user_added' => 3,
			'numberOfGames' => 0,
			'numberOfHits' => 0,
        ];
    }
}
