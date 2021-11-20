<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    public function login(Request $request){
        $request->validate([
            'username'=>['required'],
            'password'=>['required']
        ]);

        if(Auth::attempt($request->only('username', 'password'))){
            return response()->json(Auth::user(), 200);
        }else{
            throw ValidationException::withMessages(['The provided credentials are incorrect']);
        }

    }

    public function logout(){
        Auth::logout();
    }
}
