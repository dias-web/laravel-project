<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class SecurityController extends Controller
{
    public function showSecurityPage()
    {
        if (!Auth::check()) {
            Session::flash('auth_required', 'Требуется авторизация!');
            return Redirect::to('/login');
        }

        return view('security' );
    }
}
