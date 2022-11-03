<?php
 
namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class UserListController extends Controller
{
    public function do_list()
    {
        if (!Auth::check() || Auth::User()->isAdmin != 1) {
            return abort(401);
        }
		return view('/UserList');
    }
}

?>
