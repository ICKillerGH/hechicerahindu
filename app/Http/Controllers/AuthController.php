<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Contracts\Session\Session;
use Illuminate\Validation\ValidationException;
use Illuminate\Contracts\Auth\Factory as AuthFactory;

class AuthController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('auth')->only('logout');
    }

    public function showForm()
    {
        return view('auth.login');
    }

    public function login(LoginRequest $request, AuthFactory $auth)
    {
        throw_unless(
            $auth->guard()->attempt($request->validated(), $request->boolean('rememberme')),
            ValidationException::withMessages(['email' => [trans('auth.failed')]])
        );

        return redirect()->intended($request->user()->defaultLoginRedirect());
    }

    public function logout(AuthFactory $auth, Session $session)
    {
        $auth->guard()->logout();

        $session->invalidate();

        return redirect()->route('login');
    }
}
