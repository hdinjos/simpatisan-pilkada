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
        }else {
            return redirect('/auth/koordinators/login');
        }
 
        // if (Auth::attemptWhen($credentials,  function (User $user) {
        //     dd($user);
        //     return $user->role== "KOOR";
        // })) {
        //     $request->session()->regenerate();
        //     // dd($credentials);

 
        //     // return redirect()->intended('dashboard');
        //     return redirect('/koordinators');

        // }else {
        //     dd($request->username);
        //     return redirect('/auth/koordinators/login');

        // }

   
    }
}
