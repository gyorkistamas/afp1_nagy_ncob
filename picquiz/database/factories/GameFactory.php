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
		for($i = 0; $i < $l; $i++){
			array_push($this->GamePuzzles, GamePuzzle::factory());
		}
        return $this;
	}

	public function create($attributes = [], ?Model $parent = null){
		Factory::create($attributes, $parent);
		// ---
		// - Because of these lines the factory now
		//    both unportable and thread unsafe
		$query = DB::select("select last_insert_id()");
		$game_id = get_object_vars($query[0])["last_insert_id()"];
		// ---
		foreach($this->GamePuzzles as $i){
			$i->create(['game_id' => $game_id]);
		}
	}

	function count(?int $count){
        return $this->newInstance(['count' => 1]);
	}
}
