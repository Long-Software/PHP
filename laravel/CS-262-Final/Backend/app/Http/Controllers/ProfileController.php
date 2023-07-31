<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
// Admin Features: 5
    public function profile()
    {
        $id = Auth::id();
        $profile = User::find($id);
        return view('admin_profile', compact('profile'));
    }

// Admin Features: 6
    public function edit_profile()
    {
        $id = Auth::id();
        $profile = User::find($id);
        return view('admin_edit_profile', compact('profile'));
    }
    public function store_profile(Request $request)
    {
        $id = Auth::id();
        $profile = User::find($id);
        $profile->email = $request->email ?? $profile->email;
        $profile->user_name = $request->user_name ?? $profile->user_name;
        $profile->user_username = $request->user_username ?? $profile->user_username;
        if ($request->file('profile_image')) {
            $file = $request->file('profile_image');

            $filename = date('ymdHi') . $file->getClientOriginalName();
            $file->move(public_path('upload/images'), $filename);
            $profile['profile_image'] = $filename;
        }
        $profile->save();
        return back();
    }
}
