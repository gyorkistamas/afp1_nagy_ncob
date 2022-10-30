<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
            abort(404);
        }
    }
}
