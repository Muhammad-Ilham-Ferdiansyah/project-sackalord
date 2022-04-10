<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateProfileRequest;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    public function update(UpdateProfileRequest $request)
    {
        auth()->user()->update($request->only('name', 'username', 'email'));

        if ($request->input('password')) {
            auth()->user()->update([
                'password' => bcrypt($request->input('password')),
            ]);
        }

        return redirect()->route('profile')->with('message', 'Update Profile Successfully!');
    }
}
