<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class ProfilesController extends Controller
{
    //
    public function index(User $user) {
        return view('profiles.index', compact('user'));
    }


    public function edit(User $user) {
            return view('profiles.edit', compact('user'));

    }
    public function update($user) {
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => 'url',
            'image' => 'image'
        ]);
            $imagePath = request('image')->store('profile', 'public');
        if(request('image')) {

            $image = Image::make(public_path("storage/${imagePath}"))->fit(1000, 1000);
            $image->save();
        }
        $user->profile->update(array_merge(
            $data,
            ['image' => $imagePath]
        ));
        return redirect("/profile/{$user->id}");
    }
}

