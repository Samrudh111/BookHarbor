<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected function authenticated(Request $request, $user)
    {
        if (Auth()->user()->role == 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif (Auth()->user()->role == 'user' && Auth()->user()->is_email_verified == 1) {
            return redirect()->route('home');
        } elseif (Auth()->user()->role == 'user' && Auth()->user()->is_email_verified == 0) {
            return redirect()->route('login')->with('error','Email not verified! An email has been sent to your email address please verify.');
        }
    }

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
}
