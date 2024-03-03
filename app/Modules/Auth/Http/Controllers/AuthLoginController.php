<?php

declare(strict_types=1);

namespace App\Modules\Auth\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Modules\Auth\Http\Requests\AuthLoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;


class AuthLoginController extends Controller
{
    public function auth(AuthLoginRequest $request): RedirectResponse
    {
        if (Auth::attempt($request->validated())) {
            $redirectRoute = Session::get(
                'after_login_route',
                'uploaded-images.index',
            );
            $request->session()->regenerate();

            return Redirect::route($redirectRoute);
        }

        return Redirect::back()->withErrors(
            [
                'email' => 'Wrong email or/and password',
            ],
        )->onlyInput('email');
    }

    public function login(): \Illuminate\Contracts\View\View
    {
        return View::make('Auth::login_form');
    }
}