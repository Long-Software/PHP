<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginUserRequest;
use App\Http\Requests\StoreUserRequest;
use App\Models\User;
use App\Traits\HttpResponses;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller{
    use HttpResponses;

    public function login(LoginUserRequest $request){
        $request->validated($request->only(['email','password']));

        if(!Auth::attempt($request->only(['email', 'password']))) {
            return $this->error('', 'Credentials is in Valid', 401);
        }

        // $user = User::where('email', $request->email)->first();
        $user = User::where('email', $request->email)->first();

        return $this->success([
            'user' => $user,
            'token' => $user->createToken('API Token')->plainTextToken
        ], "User successfully login", 200);
    }

    public function register(StoreUserRequest $request){
        $request->validated($request->only(['email','password']));

        $user = User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'account_type' => $request->account_type,
        ]);

        return $this->success([
            "user" => $user,
        ]);
    }

    public function logout(){
        Auth::user()->currentAccessToken()->delete(); // currentAccessToken() is not recognize by intelephense
        return $this->success([
            'message' => 'successfully logout' 
        ]);
    }
    
}