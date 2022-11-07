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
		$p = DB::table('game_puzzles')->join('puzzles', 'puzzle_id', '=', 'puzzles.id')->get()->where('game_id', $id)->values()->get($puzzle);
		if($p == NULL){
			return abort(404);
		}
		return view('game/game',
					['puzzle' => $p,
						'nth' => $puzzle,
						'per' => DB::table('game_puzzles')->where('game_id', $id)->count()
					]
		);
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
