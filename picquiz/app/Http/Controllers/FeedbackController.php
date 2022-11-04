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
        return view('feedbacks.allFeedback', [
            'feedbacks' => Feedback::orderBy('read')->orderByDesc('created_at')->paginate(5)
        ]);
    }


    public function create() {
        return view('feedbacks.newFeedback');
    }

    public function store(Request $request) {
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
