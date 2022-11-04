<?php
 
namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\Puzzle;
use App\Models\GamePuzzle;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
 
class GameController extends Controller
{
    public function generate(Request $request)
    {
		Game::factory()->len((int)$request->post('game_len'))->create();
		return redirect('/play');
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
