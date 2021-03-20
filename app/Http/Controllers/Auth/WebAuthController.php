<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\AuthenticateRequest;

class WebAuthController extends Controller
{
    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        return view('pages.admin.login')
                ->with(['hideSidebar' => true]);
    }

    /**
     * Handle an authentication attempt.
     *
     * @param  \App\Http\Requests\AuthenticateRequest $request
     * @return \Illuminate\Http\Response
     */
    public function authenticate(AuthenticateRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials + ['active' => true])) {
            $arriveFrom = $request->session()->get('arrive_from');
            $request->session()->forget('arrive_from');
            $request->session()->regenerate();

            return redirect()->intended($arriveFrom ?? 'admin/dashboard');
        }

        return back()->withErrors([
            'email' => __('auth.failed'),
        ]);
    }

    /**
     * Log the user out of the application.
     *
     * @param  \Illuminate\Http\Request $request
     * @return \Illuminate\Routing\Redirector|\Illuminate\Http\RedirectResponse
     */
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}
