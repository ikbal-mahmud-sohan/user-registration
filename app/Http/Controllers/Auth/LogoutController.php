<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LogoutController extends Controller
{
    
    public function __invoke(Request $request)
    {
        $user = Auth::user();
        if ($user) {
            $user->tokens()->delete(); // Assuming you are using Laravel Sanctum or Passport
            return redirect('/login')->with('message', 'Logged out successfully');
        } else {
            return response()->json(['error' => 'User not authenticated'], 401);
        }
    }
}
