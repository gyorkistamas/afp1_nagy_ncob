<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
	// ### Register ###

		// Show Register/Create Form:
		public function create() {
			return view('users.register');
		}

		//Create a new user and store it in database:
		public function store(Request $request) {
			$formFields = $request->validate([
				'username' => ['required', 'min:3'],
				'email' => ['required', 'email', Rule::unique('users', 'email')],
				'password' => ['required', 'confirmed', 'min:6'],
				//'profile_picture' => ['image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048', 'dimensions:min_width:100,min_height:100,max_width:1000,max_height:1000']
			]);
			
			if ($request->hasFile('profile_picture')) {
				$formFields['profile_picture'] = $request->file('profile_picture')->store('images/uploads/users', 'public');
				
			}   
			else {
				$formFields['profile_picture'] = "/images/samplePictures/Sample_User_Icon.png";
			}

			//dd($formFields['profile_picture']);

			//Hash password:
			$formFields['password'] = bcrypt($formFields['password']);

			$user = User::create($formFields);

			return redirect('/')->with('message', 'Példa szöveg regisztráció tesztelésére!');
		}

	// ### Login ###

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

			if (auth()->attempt($formFields)) {

				$request->session()->regenerate();
				return redirect('/')->with('message', 'Sikeresen bejelentkeztél!');
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
		if(User::where('id', $uid)->get()[0][$field]){
			$this->set_bool_field($uid, False, $field);
		}else{
			$this->set_bool_field($uid, true, $field);
		}
	}

    private function set_bool_field($uid, $b, $field)
    {
		User::where('id', $uid)->update([$field => $b]);
    }

    //View User:
    public function view(User $user) {
        return view('users.view', ['user' => $user]);
    }

}
