<?php

namespace App\Http\Controllers;

use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use function Symfony\Component\String\b;

class FeedbackController extends Controller
{
    //

    public function index() {
        //TODO: megírni
    }


    public function create() {
        if(Auth::check()) {
            return view('feedbacks.newFeedback');
        }
        else {
            return redirect('/login');
        }
    }

    public function store(Request $request) {


        if(!Auth::check()) {
            redirect('/login');
        }

        $formFields = $request->validate([
            'title' => ['required', 'min:4'],
            'message' => ['required', 'min:15'],
        ]);

        $formFields['creator'] = Auth::User()->id;

        $fb = Feedback::create($formFields);

        return redirect('/feedback/new')->with('message', 'A visszajelzése rögzítésre került!');
    }
}
