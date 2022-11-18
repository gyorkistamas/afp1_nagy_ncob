<?php

namespace App\Http\Controllers;

use App\Models\Game;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Contracts\Cache\Store;
use Illuminate\Support\Facades\Storage;
use Illuminate\Contracts\Session\Session;

class UserController extends Controller
{
    // Show Register/Create Form:
    public function create() {
        return view('users.register');
    }

    //Create a new user and store it in database:
    public function store(Request $request) {
        $formFields = $request->validate([
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'confirmed', 'min:6']
        ]);

        if ($request->hasFile('profile_picture')) {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('images/uploads/users', 'public');
            $formFields['profile_picture'] = '/storage/'.$formFields['profile_picture'];

        }
        else {
            $formFields['profile_picture'] = "/images/samplePictures/Sample_User_Icon.png";
        }

        //Hash password:
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        return redirect('/')->with('message', 'Sikeres regisztráció!');
    }

    //Show Login form:
    public function login() {
        return view('users.login');
    }

    //Authenticate User:
    public function authenticate(Request $request) {
        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        $email = $formFields['email'];

        $User = User::where('email', $email)->first();

        if ($User) {
            $isBanned = $User->isBanned == 1 ? true : false;
        }

        if (auth()->attempt($formFields)) {

            if ($isBanned) {
                $request->session()->invalidate();
                return back()->withErrors(['email' => 'Ez a felhasználó kitiltásra került korábban!'])->onlyInput('email');
            }
            else {
                $request->session()->regenerate();
                return redirect('/')->with('message', 'Sikeresen bejelentkeztél!');
            }

        }

        return back()->withErrors(['email' => 'Hibás adatmegadás!'])->onlyInput('email');
    }

    //Logout:
    public function logout(Request $request) {
        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/')->with('message', 'Sikeresen kijelentkeztél!');
    }

    //View User:
    public function view($userID) {

        $User = User::findOrFail($userID);
        // $GamesPlayedByUser = Game::where('player', $userID)->orderByDesc('id')->paginate(3);

        $GamesPlayedByUser = Game::select('games.created_at', 'games.player', 'game_puzzles.hit')
                                    ->join('game_puzzles', 'games.id', '=', 'game_puzzles.game_id')
                                    ->where('games.player', $userID)
                                    ->orderByDesc('games.created_at')
                                    ->paginate(3);


        //dd($GamesPlayedByUser);
        return view('users.view', [
            'User' => $User,
            'GamesPlayedByUser' => $GamesPlayedByUser
        ]);
    }

    //Show Edit view
    public function edit() {
        return view('users.edit');
    }

    public function editError() {
        session()->flash("error", "Hiba a fájl feltöltése során!");
        return view('users.edit');
    }

    //Update User
    public function update(Request $request) {
        $formFields = $request->validate([
            'username' => ['required', 'min:3'],
            'email' => ['required', 'email'],
        ]);

        $user = User::find(Auth::User()->id);




        if ($request->get('email') != Auth::User()->email) {
            $email = $request->validate([
                'email' => [Rule::unique('users', 'email')]
            ]);
            $formFields['email'] = $email;
        }



        if ($request->get('password') != '') {
            $password = $request->validate([
                'password' => ['required', 'confirmed', 'min:6']
            ]);

            $user->password = Hash::make($password['password']);
        }


        if ($request->hasFile('profile_picture')) {

            $formFields['profile_picture'] = $request->file('profile_picture')->store('images/uploads/users', 'public');
            $user->profile_picture =  "/storage/" . $formFields['profile_picture'];
        }

        if (!$user) {
            return abort(404);
        }

        $user->username = $formFields['username'];
        $user->email = $formFields['email'];



        $user->save();

        return redirect("/users/edit")->with("message", "Sikeres módosítás!");
	}

	// ### Modify ###

	public function user_list_toggle(Request $request){
        if (!Auth::check() || Auth::User()->isAdmin != 1) {
            return abort(401);
        }
        if (!isset($request->uid) || !isset($request->field)) {
            return abort(419);
        }
		$this->toggle_field($request->uid, $request->field);

		return redirect('/UserList');
	}

	private function toggle_field($uid, $field){
			$this->set_bool_field($uid, !User::where('id', $uid)->get()[0][$field], $field);
	}

    private function set_bool_field($uid, $b, $field)
    {
		User::where('id', $uid)->update([$field => $b]);
    }
}
