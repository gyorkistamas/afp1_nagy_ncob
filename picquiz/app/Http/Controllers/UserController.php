<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
            $formFields['profile_picture'] = $request->file('profilePicture')->store('images/uploads/users', 'public');
        }
        else {
            $formFields['profile_picture'] = "images/samplePictures/Sample_User_Icon.png";
        }

        //Hash password:
        $formFields['password'] = bcrypt($formFields['password']);

        $user = User::create($formFields);

        return redirect('/')->with('message', 'Példa szöveg regisztráció tesztelésére!');
    }
}
