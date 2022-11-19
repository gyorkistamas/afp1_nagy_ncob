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
		if(Auth::User() == NULL){
			$uid = 1;
		}else{
			$uid = Auth::User()->id;
		}
		$game = Game::factory()->create(['player' => $uid]);
		$max_puzzles = (get_object_vars(DB::select('select count(*) c from puzzles')[0]))["c"];
		$arr = range(1, $max_puzzles);
		shuffle($arr);
		$arr = array_slice($arr, -($glen));
		foreach($arr as $i){
			GamePuzzle::factory()->create(['game_id' => $game->id, 'puzzle_id' => $i]);
		}
		return redirect('/play/' .
							$game->id . '/' .
							1
						);
    }

	public function play($id, $puzzle){
		$puzzle = (int)$puzzle;
		if($puzzle == 0){
			abort(404);
		}
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
						->select('users.username', 'games.created_at', 'game_puzzles.hit', 'puzzles.answer', 'puzzles.picture')
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

	public function create() {
		return view('game.newPuzzle');
	}

	public function store(Request $req) {
		$formdata = $req->validate([
			'picture' => ['required'],
			'answer' => ['required', 'min:3']
		]);

		$formdata['picture'] = $req->file('picture')->store('images/uploads/uploaded_puzzles', 'public');
		$formdata['picture'] = '/storage/' . $formdata['picture'];
		$formdata['answer'] = GameController::to_answer_format($formdata['answer']);

		$formdata['user_added'] = Auth::User()->id;

		$game = Puzzle::create($formdata);

		return redirect('/games/new')->with('message', 'Feladvány sikeresen létrehozva!');
	}

}

?>
