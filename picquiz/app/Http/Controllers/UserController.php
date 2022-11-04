<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use PhpParser\Node\Expr\FuncCall;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;

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
            'password' => ['required', 'confirmed', 'min:6'],
            //'profile_picture' => ['image', 'mimes:jpg,png,jpeg,gif,svg', 'max:2048', 'dimensions:min_width:100,min_height:100,max_width:1000,max_height:1000']
        ]);
        
        if ($request->hasFile('profile_picture')) {
            $formFields['profile_picture'] = $request->file('profile_picture')->store('images/uploads/users', 'public');
            $formFields['profile_picture'] = '/storage/'.$formFields['profile_picture'];
            
        }   
        else {
            $formFields['profile_picture'] = "/images/samplePictures/Sample_User_Icon.png";
        }

        //dd($formFields['profile_picture']);

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

    //View User:
    public function view() {
        return view('users.view');
    }

    //Show Edit view
    public function edit() {
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
            if (Auth::User()->profile_picture != "/images/samplePictures/Sample_User_Icon.png") {
                File::delete(Auth::User()->profile_picture);
            }
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

}
