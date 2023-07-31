<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Admin;
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
        return redirect()->route('index');
        // return view('auth.register');
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
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'user_verified' => 1,
            'user_username' => $request->user_name,
            'password' => Hash::make($request->password),
            'account_type'=>$request->account_type,
        ]);
        event(new Registered($user));
        Auth::login($user);
    
        if($request->account_type == 'a') {
            Admin::create([
                'user_id' => Auth::id(),
                'level_id' => 1,
                'last_login' => "2023-06-11 01:12:00",
                'created_by' => Auth::id(),
            ]);
        }
        return redirect(RouteServiceProvider::HOME);
    }
}
