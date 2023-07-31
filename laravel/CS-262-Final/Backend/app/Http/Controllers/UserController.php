<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use App\Models\Admin;
use Exception;
use Illuminate\Auth\Events\Registered;
use PHPUnit\Framework\ComparisonMethodDoesNotAcceptParameterTypeException;
use Symfony\Component\VarDumper\Caster\RedisCaster;

class UserController extends Controller
{
    public function destroy(Request $request)
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }

    public function create_admin()
    {
        $id = Auth::id();
        $lvl = DB::select('select 
                                level_id
                            from 
                                admins
                            where user_id = ?', [$id]);
        if ($lvl[0]->level_id <= 2) {
            $level = DB::select('select * from admin_level where level_id is not null');
            return view('createAdmin', compact('level'));
        } else {
            return redirect('/');
        }
    }
    public function store_admin(Request $request)
    {
        $request->validate([
            'user_name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);
        $user = User::create([
            'user_name' => $request->user_name,
            'email' => $request->email,
            'user_username' => $request->user_name,
            'password' => Hash::make($request->password),
            'account_type' => $request->account_type,
        ]);
        event(new Registered($user));
        if ($request->account_type == 'a') {
            Admin::create([
                'user_id' => $user->user_id,
                'level_id' => $request->type,
                'last_login' => "2023-06-11 01:12:00",
                'created_by' => Auth::id(),
            ]);
        }
        return redirect('/a');
    }
    public function verify_borrower()
    {
        $user = DB::select("select user_id, user_name, account_type, updated_at from users where account_type = 'u' and not user_verified order by updated_at desc;");
        return view('verifyUser', compact('user'));
    }
    public function verify_bank()
    {
        $user = DB::select("select user_id, user_name, account_type, updated_at from users where account_type = 'b' and not user_verified order by updated_at desc;");
        return view('verifyUser', compact('user'));
    }
    public function verify_user(Request $request)
    {
        $user = User::findOrFail($request->user_id);
        $user->user_verified = true;
        $user->save();
        return back();
    }

    public function edit_user(Request $request)
    {
        $profile = User::find($request->id);
        return view('editUser', compact('profile'));
    }
    public function update_user(Request $request)
    {
        $profile = User::find($request->user_id);
        $profile->user_verified = false;
        $profile->save();
        return redirect('/a');
    }
    public function delete_user(Request $request)
    {
        User::destroy($request->id);
        return redirect('/a');
    }

    public function find_user(Request $request)
    {
        $user = null;
        try {
            $user = User::findOrFail($request->user_id);
        } catch (Exception $e) {
            abort(404);
        }
        return view('find_user', compact('user'));
    }
}
