<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;

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
    public function store(LoginRequest $request): RedirectResponse
    {
        // Authenticate the user
        $request->authenticate();

        // Regenerate the session for security
        $request->session()->regenerate();

        // Check the user's role and redirect accordingly
        $user = Auth::user();

        if ($user->role === 'customer') {
            return redirect()->route('customerboard'); // Redirect to client dashboard
        } elseif ($user->role === 'freelancer') {
            return redirect()->route('freelancerboard'); // Redirect to freelancer dashboard
        }

        // Default redirection if no role is assigned
        return redirect()->route('/');
    }

    /**
     * Destroy an authenticated session.
     */
    public function destroy(Request $request): RedirectResponse
    {
        // Log the user out
        Auth::guard('web')->logout();

        // Invalidate the session
        $request->session()->invalidate();

        // Regenerate the CSRF token
        $request->session()->regenerateToken();

        // Redirect to the home page
        return redirect('/');
    }

    /** Socilites
     * Redirect the user to the Google authentication page.
     */
    public function redirectToGoogle()
    {
        return Socialite::driver('google')->redirect();
    }

    /**
     * Handle the Google callback.
     */
    public function handleGoogleCallback()
    {
        $user = Socialite::driver('google')->user();
        return $this->loginOrCreateAccount($user, 'google');
    }

    /**
     * Redirect the user to the Facebook authentication page.
     */
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }

    /**
     * Handle the Facebook callback.
     */
    public function handleFacebookCallback()
    {
        $user = Socialite::driver('facebook')->user();
        return $this->loginOrCreateAccount($user, 'facebook');
    }

    /**
     * Login or create a new account for the social user.
     */
    private function loginOrCreateAccount($socialUser, $provider)
    {
        $user = User::updateOrCreate(
            ['email' => $socialUser->getEmail()],
            [
                'name' => $socialUser->getName(),
                'provider' => $provider,
                'provider_id' => $socialUser->getId(),
                'avatar' => $socialUser->getAvatar(),
            ]
        );

        Auth::login($user);

        return redirect()->route('dashboard');
    }
}
