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
        // Validate form inputs
        $request->validate([
            'email'    => 'required|email',
            'password' => 'required|min:6',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt login with credentials + active status
        if (Auth::guard('web')->attempt($credentials + ['status' => true])) {
            // Prevent session fixation attacks
            $request->session()->regenerate();

            return redirect()->route('admin.dashboard')->with([
                'message' => [
                    'result' => 'success',
                    'msg'    => 'Welcome back!',
                ],
            ]);
        }

        // Login failed
        return redirect()->back()
            ->withInput($request->only('email'))
            ->with([
                'message' => [
                    'result' => 'error',
                    'msg'    => 'Invalid Credentials or Account Inactive.',
                ],
            ]);
    }

    /**
     * Handle admin logout.
     */
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        // Invalidate the session & regenerate CSRF token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login')->with([
            'message' => [
                'result' => 'success',
                'msg'    => 'You have been logged out successfully.',
            ],
        ]);
    }
}
