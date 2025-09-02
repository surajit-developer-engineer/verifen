<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    /**
     * Show login form.
     */
    public function index()
    {
        return view('pages.admin.auth.index');
    }

    /**
     * Handle admin login.
     */
    public function login(Request $request)
    {
        // Validate the form data
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // Attempt to log the user in
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials + ['status' => true])) {
            $request->session()->regenerate();

            // Login successful
            return redirect()->route('admin.dashboard')->with([
                'message' => [
                    'result' => 'success',
                    'msg' => 'Welcome back!',
                ],
            ]);
        }

        // Login failed
        return redirect()->back()
            ->withInput($request->only('email'))
            ->with([
                'message' => [
                    'result' => 'error',
                    'msg' => 'Invalid Credentials Or Account Inactive',
                ],
            ]);
    }

    /**
     * Handle admin logout.
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with([
            'message' => [
                'result' => 'success',
                'msg' => 'You Have Been Logged Out Successfully.',
            ],
        ]);
    }
}
