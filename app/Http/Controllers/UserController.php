<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // Show Signup Form
    public function showSignupForm()
    {
        return view('signup');
    }

    // Handle Signup
    public function store(Request $request)
    {
        UserModel::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password), // Encrypt password
        ]);

        return redirect()->route('login.form'); // Redirect to login page after successful signup
    }

    // Show Login Form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle Login
    public function authenticate(Request $request)
    {
        $user = UserModel::where('email', $request->email)->first();

        if ($user && Hash::check($request->password, $user->password)) {
            return redirect()->route('dashboard'); // Redirect to dashboard after successful login
        } else {
            return "Invalid email or password!";
        }
    }
}
