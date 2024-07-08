<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    
    public function __invoke(LoginRequest $request)
    {
        $user = User::where('email',$request->email)->first();
        
        if(!auth()->attempt($request->only(['email','password']))){
                 throw ValidationException::withMessages([
                'email' =>  ['The credentials are enterd incorrect']
            ]);
        }
       $token = $user->createToken('auth_token')->plainTextToken;
        return [
            'user' => $user,
            'token' => $token   
        ];
    }
}
