<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Model\Users;

class AuthController extends Controller
{
    //
    public function formLoginKoordinator()
    {
        //
        return view('koordinator/auth/form-login');
    }

    //
    public function loginKoordinator(Request $request)
    {
        //
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);

        if (Auth::attemptWhen($credentials, function ($user) {
            return $user->role == "KOOR";
        })) {
            return redirect('/koordinators');
        } else {
            return redirect('/auth/koordinators/login');
        }
    }

    public function koordinatorLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth/koordinators/login');;
    }

    public function formLoginAdmin()
    {
        //
        return view('admin/auth/login-form');
    }

    //
    public function loginAdmin(Request $request)
    {
        //
        $credentials = $request->validate([
            'username' => ['required'],
            'password' => ['required'],
        ]);
        // dd($credentials);

        if (Auth::attemptWhen($credentials, function ($user) {
            // dd($user);
            return $user->role == "ADMIN";
        })) {
            return redirect('/admins/koordinators');
        } else {
            return redirect('/auth/admins/login');
        }
    }

    public function adminLogout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/auth/admins/login');;
    }
}
