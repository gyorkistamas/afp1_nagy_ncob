<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\GamePuzzle;
use DB;
use Illuminate\Database\Eloquent\Model;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Game>
 */
class GameFactory extends Factory
{
	public $game_id;
	public $lenght;
	public $GamePuzzles = array();

    public function definition()
    {
        return [
			"player" => 1,
			"numberOfHits" => 0,
        ];
    }

	public function len(?int $l){
		$this->lenght = $l;
        return $this;
	}

	public function create($attributes = [], ?Model $parent = null){
		Factory::create($attributes, $parent);
		// ---
		// - Because of these lines the factory now
		//    both unportable and thread unsafe
		$query = DB::select("select max(id) m from games");
		$game_id = get_object_vars($query[0])["m"];
		// ---
		$max_puzzles = (get_object_vars(DB::select('select count(*) c from puzzles')[0]))["c"];
		$arr = range(1, $max_puzzles);
		shuffle($arr);
		$arr = array_slice($arr, -($this->lenght));
		foreach($arr as $i){
			GamePuzzle::factory()->create(['game_id' => $game_id, 'puzzle_id' => $i]);
		}
	}

	function count(?int $count){
        return $this->newInstance(['count' => 1]);
	}
}
