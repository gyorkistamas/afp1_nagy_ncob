<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GamePuzzle;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
			"player" => 1,
        ];
    }

	public function len($len){
		return $this->state(function($l) use ($len) {
			GamePuzzle::factory()->count($l)->create();
		});
	}
}
