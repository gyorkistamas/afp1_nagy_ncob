<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Puzzle;
use App\Models\GamePuzzle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Collection;

class GameController extends Controller
{
	public function _new(){
		$max_puzzles = (get_object_vars(DB::select('select count(*) c from puzzles')[0]))["c"];
		return view('game/newGame', ['max' => $max_puzzles]);
	}

    public function generate(Request $request)
    {
		$glen = (int)$request->post('game_len');
		if(get_object_vars(DB::select('select count(*) c from puzzles')[0])["c"] < $glen){
			return abort(419);
		}
		Game::factory()->len($glen)->create();
		// ---
		// - Again, just as with GameFactory this would fail terribly
		//    if multiple users were to be served at the same time
		$query = DB::select("select max(id) m from games");
		$game_id = get_object_vars($query[0])["m"];
		// ---
		return redirect('/play/' .
							$game_id . '/' .
							1
						);
    }

	public function play($id, $puzzle){
		$p = DB::table('game_puzzles')->join('puzzles', 'puzzle_id', '=', 'puzzles.id')->get()->where('game_id', $id)->values()->get($puzzle-1);
		if($p == NULL){
			return abort(404);
		}
		return view('game/game',
					['puzzle' => $p,
						'nth' => $puzzle,
						'per' => DB::table('game_puzzles')->where('game_id', $id)->count(),
						'hits' => DB::table('game_puzzles')->where('game_id', $id)->where('hit', 1)->count(),
					]
		);
	}

	private function to_answer_format($str){
		$str = str_replace(['_', ':', ',', '.', '?', '!'], [' '], strtolower($str));
		return $str;
	}

	public function do_validate(Request $request, $id, $puzzle){ // this function cannot be called just "validate" cause that conflicts with Laravel definitions
		$p = DB::table('game_puzzles')->join('puzzles', 'puzzle_id', '=', 'puzzles.id')->get()->where('game_id', $id)->values()->get($puzzle-1);
		if($this->to_answer_format($request->tipp) == $this->to_answer_format($p->answer)){
			$i = DB::table('game_puzzles')->get()->where('game_id', $id)->values()->get($puzzle-1)->id;
			DB::table('game_puzzles')->where('id', $i)->update(['hit' => 1]);
		}
		if($puzzle < DB::table('game_puzzles')->where('game_id', $id)->count()){
			return redirect("/play/" . $id . '/' . ($puzzle+1));
		}else{
			return redirect("/results/" . $id);
		}
	}

    public function summarize($id){
		$puzzles = DB::table('game_puzzles')
						->join('puzzles', 'puzzle_id', '=', 'puzzles.id')
						->join('games', 'game_id', '=', 'games.id')
						->join('users', 'player', '=', 'users.id')
						->where('game_id', $id)->get();
		$c = count(DB::table('game_puzzles')->where('game_id', $id)->where('hit', '!=', 0)->get());
		return view('game/results', ['puzzles' => $puzzles, 'hits' => $c ]);
	}

    public function list() {

      $listOfPuzzles = Puzzle::select('puzzles.id',
                                    'puzzles.created_at',
                                    'puzzles.updated_at',
                                    'puzzles.picture',
                                    'puzzles.answer',
                                    'puzzles.numberOfHits',
                                    'puzzles.numberOfGames',
                                    'users.username')
                                ->join('users', 'users.id', '=', 'puzzles.user_added')
                                ->paginate(6);

      return view('game.puzzleList', ['Puzzles' => $listOfPuzzles]);

    }
}

?>
