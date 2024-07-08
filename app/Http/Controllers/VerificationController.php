<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class VerificationController extends Controller
{
    public function show(){
        return view('emails.verify');
    }
    public function verify(Request $request, $token)
    {

        $user = User::where('verification_token', $token)->first();

        if ($user) {
            $user->email_verified_at = now();
            $user->verification_token = null;
            $user->save();

            Auth::login($user);

            if ($user->role == 'customer') {
                return redirect()->route('account.dashboard')->with('success', 'verified successfully.');;
            } elseif ($user->role == 'admin') {
                return redirect()->route('admin.dashboard');
            }
        }

        return redirect()->back()->with('error', 'Invalid verification token.');

    }
}
