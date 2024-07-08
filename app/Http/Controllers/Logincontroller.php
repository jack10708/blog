<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;
use App\Mail\VerifyEmail;
use Illuminate\Support\Facades\Mail;

class LoginController extends Controller
{
    public function login()
    {
        return view('login');
    }

    public function login_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if ($validator->passes()) {
            if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
                $user = Auth::user();

                if (!$user->email_verified_at) {
                    Auth::logout();
                    return redirect()->route('login')->with('error', 'Please verify your email first.');
                }

                if ($user->role == 'customer') {
                    return redirect()->route('account.dashboard');
                } elseif ($user->role == 'admin') {
                    return redirect()->route('admin.dashboard');
                }
            } else {
                return redirect()->route('login')->with('error', 'Either email or password is incorrect');
            }
        } else {
            return redirect()->route('login')
                ->withInput()
                ->withErrors($validator);
        }
    }

    public function register()
    {
        return view('register');
    }

    public function register_user(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|confirmed|min:7',
        ]);

        if ($validator->passes()) {
            $user = new User();
            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->verification_token = Str::random(60);
            $user->save();


            // Send verification email
            Mail::to($user->email)->send(new VerifyEmail($user));

            return redirect()->route('login')->with('success', 'You have registered successfully. Please check your email to verify your account.');
        } else {
            return redirect()->route('register')
                ->withInput()
                ->withErrors($validator);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}
