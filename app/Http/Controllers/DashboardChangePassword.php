<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class DashboardChangePassword extends Controller
{
    public function edit()
    {
        return view('dashboard.password.edit');
    }

    public function update(Request $request)
    {
        $request->validate([
            'current_password' => ['required'],
            'password' => ['required', 'min:8', 'confirmed'],
        ]);

        if (Hash::check($request->current_password, auth()->user()->password)) {
            auth()->user()->update(['password' => bcrypt($request->password)]);
            return redirect('/dashboard/profile')->with('success', 'Your Password has been updated!.');
        }
        throw ValidationException::withMessages([
            'current_password' => 'Your current password does`nt match with our record',
        ]);
    }
}
