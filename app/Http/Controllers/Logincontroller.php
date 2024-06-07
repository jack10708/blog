<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class Logincontroller extends Controller
{
      public function login(){

        return view('clients.login');
      }

      public function login_user(Request $request){
        $validator =  Validator::make($request->all(),
        [
            'email' => 'required|email',
            'password' => 'required',
        ]);

       if($validator->passes()){

        if(Auth::attempt(['email'=>$request->email,'password'=>$request->password])){


            return redirect()->route('clients.dashboard');

        }
        else{
            return redirect('clients.login')->with('error','Either email or password is incorrect');
        }

       }
       else{
              return redirect()->route('clients.login')
              ->withInput()
              ->withErrors($validator);
       }

      }
       public function register(){
        return view('clients.register');
       }

       public function register_user(Request $request){
        $validator =  Validator::make($request->all(),
        [
            'name'     =>'required',
            'email'    => 'required|email|unique:users',
            'password' => 'required|confirmed|min:7',
        ]);


       if($validator->passes()){


            $user = new User();

            $user->name = $request->name;
            $user->email = $request->email;
            $user->password = Hash::make($request->password);
            $user->role = 'user';
            $user->save();

            return redirect()->route('clients.login')->with('success','you have registered successfully');

       }
       else{
              return redirect()->route('clients.register')
              ->withInput()
              ->withErrors($validator);
       }

       }

       public function logout(){
        Auth::logout();
        return redirect()->route('clients.login');
       }
}

