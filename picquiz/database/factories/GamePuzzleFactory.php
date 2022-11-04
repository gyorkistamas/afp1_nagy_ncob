<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use DB;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\GamePuzzle>
 */
class GamePuzzleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
			'hit' => 0,
			'puzzle_id' => $this->faker->numberBetween(1, DB::table('puzzles')->count()),
        ];
    }
}
