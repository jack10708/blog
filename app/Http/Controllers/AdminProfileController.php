<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;

class AdminProfileController extends Controller
{
    public function show()
{
    $user = auth()->guard('admin')->user();
    $profile = $user->adminProfile;

    if (!$profile) {
        // Create a new profile if it doesn't exist
        $profile = $user->adminProfile()->create([
            'bio' => '',
            'location' => '',
        ]);
    }

    return view('admin.profile.show', compact('profile'));
}

    public function edit()
    {
        $user = auth()->guard('admin')->user();
        $profile = $user->adminProfile;


        return view('admin.profile.edit', compact('profile'));
    }

    public function update(Request $request)
    {
        $user = auth()->user();
        $profile = $user->adminProfile;

        $data = $request->validate([
            'bio' => 'nullable|string',
            'location' => 'nullable|string',
            'profile_picture' => 'nullable|image|max:2048',
            'current_password' => 'nullable|string',
            'new_password' => 'nullable|string|min:8|confirmed',
        ]);

        // Update profile fields
        $profile->bio = $data['bio'] ?? $profile->bio;
        $profile->location = $data['location'] ?? $profile->location;

        if ($request->hasFile('profile_picture')) {
            $profile->profile_picture = $request->file('profile_picture')->store('profile_pictures', 'public');
        }

        $profile->save();

        // Handle password change only if current_password is provided
        if ($request->filled('current_password')) {
            if (Hash::check($data['current_password'], $user->password)) {
                if ($request->filled('new_password')) {
                    $user->password = Hash::make($data['new_password']);
                    $user->save();
                }
            } else {
                return redirect()->back()->withErrors(['current_password' => 'Current password is incorrect']);
            }
        }

        return redirect()->route('admin.profile.show')->with('success', 'Profile updated successfully');
    }
}
