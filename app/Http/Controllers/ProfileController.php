<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function edit()
    {
        return view('profile.edit');
    }

    public function update(Request $request)
    {
        // Profile update logic here
        return redirect()->route('profile.edit')->with('success', 'Profile updated successfully!');
    }

    public function destroy()
    {
        // Account deletion logic here
        return redirect()->route('home')->with('success', 'Account deleted successfully.');
    }
}
