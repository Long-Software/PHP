<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class RegisteredUserController extends Controller
{
    /**
     * Display the registration view.
     *
     * @return \Illuminate\View\View
     */
    public function create()
    {
        return view('signup');
    }

    /**
     * Handle an incoming registration request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function store(Request $request)
    {
        $request->validate([
            'user_name' => 'required',
            'user_username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'account_type' => 'required',
        ]);

        $user = User::create([
            'user_name' => $request->user_name,
            'user_username' => $request->user_username,
            'account_type' => $request->account_type,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        if ($request->account_type == 'u') {
            return view('user_v2.borrower_signup',[
                'post' => Auth::id()
            ]);
        } else {
            return view('bank_v2.bank_signup',[
                'post' => Auth::id()
            ]);
        }
    }
}
