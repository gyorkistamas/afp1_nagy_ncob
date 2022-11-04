<?php
 
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Puzzle;
use App\Models\Game;
use App\Models\GamePuzzle;
 
class GameController extends Controller
{
    public function generate(Request $request)
    {
		Game::factory()->len(10)->create();
		//Game::factory()->len((int)$request->post('game_len'))->create();
		return redirect('/play');
    }
}

?>
