<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class UserController extends Controller
{
    public function index()
    {
        if (!Auth::check()) {
            Session::flash('auth_required', 'Требуется авторизация!');
            return Redirect::to('/login');
        }

        $users = User::with('userProfile')->get();
        return view('users', compact('users'));
    }
}
