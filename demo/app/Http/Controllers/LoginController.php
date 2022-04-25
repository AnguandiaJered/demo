<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Auth;

class LoginController extends Controller
{
    public function register(Request $request){
        User::create([
            'name'=> $request->name,
            'username'=> $request->username,
            'password'=> \bcrypt($request->password),
        ]);
        return \response()->json('User registered');
    }

    public function login(Request $request){
        if(Auth::attempt(['username'=>$request->username,'password'=>$request->password])){
            return \response()->json(['Token'=>auth()->user()->createToken('API Token')->plainTextToken]);
        }
        return \response()->json(['message'=>'Login failled','failed'=>true]);
    }

    public function logout(){
        auth()->user()->tokens()->delete();
        return \response()->json(['Logged out']);
    }
}
