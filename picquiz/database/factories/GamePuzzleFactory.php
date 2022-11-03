<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
			'puzzle' => $faker->randomNumber(DB::table('puzzles')->count(), false),
        ];
    }

	public function game($id){
		return $this->state(function($i) use ($id) {
			return [
				"game" => $i,
			];
		});
	}
}
