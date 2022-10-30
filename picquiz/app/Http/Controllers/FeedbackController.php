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
        if (!Auth::check() || Auth::User()->isAdmin != 1) {
            return abort(401);
        }

        return view('feedbacks.allFeedback', [
            'feedbacks' => Feedback::orderBy('read')->orderByDesc('created_at')->paginate(5)
        ]);
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


    public function update(Request $request, $id) {
        $fb = Feedback::find($id);

        if(!$fb) {
            return abort(404);
        }

        $fb->read = $request->read;
        $fb->save();

        $word = $request->read == "1" ? 'olvasottként' : 'olvasatlanként';
        $message = "Visszajelzés megjelölve $word !";
        return redirect('/feedback/all')->with('message', $message);
    }
}
