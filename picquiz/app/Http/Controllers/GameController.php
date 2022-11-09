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
    public function generate(Request $request)
    {
		Game::factory()->len((int)$request->post('game_len'))->create();
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

    public function list($userID) {
      
      if (!Auth::check()) {
          return abort(401);
      }

      $listOfGames = DB::table('games')->get()->where('player', $userID);

      return view('game.gameList', ['Games' => $listOfGames]);

    }
}

?>
