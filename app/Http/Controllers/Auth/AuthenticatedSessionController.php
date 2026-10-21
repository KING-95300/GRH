<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Providers\RouteServiceProvider;
use App\Services\TokenService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;

class AuthenticatedSessionController extends Controller
{
    /**
     * Display the login view.
     */
    public function create(): View
    {
        return view('auth.login');
    }

    /**
     * Handle an incoming authentication request.
     */
    public function store(LoginRequest $request, TokenService $tokens): RedirectResponse
    {
        $user = $request->authenticate();

        $issued = $tokens->issueTokens($user, $request->boolean('remember'));

        $tokens->queueAuthCookies(
            $issued['access_token'],
            $issued['refresh_token'],
            $issued['refresh_ttl']
        );

        $request->session()->regenerate();

        if ($user->isAdmin()) {
            return redirect()->intended(route('admin.dashboard'));
        }

        return redirect()->intended(RouteServiceProvider::HOME);
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request, TokenService $tokens): RedirectResponse
    {
        $tokens->revokeRefreshToken($request->cookie(config('auth.tokens.refresh_cookie')));
        $tokens->clearAuthCookies();

        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
