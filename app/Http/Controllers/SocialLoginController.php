<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


use App\Http\Controllers\Controller;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Str;
use Throwable;

class SocialLoginController extends Controller
{

    public function redirect($provider)
    {
        /*
        return Socialite::driver($provider)
          ->with(['prompt' => 'select_account'])
      ->redirect();
      */
        return Socialite::driver($provider)->redirect();
    }

    public function callback($provider)
    {
        try {
            $provider_user = Socialite::driver($provider)->user();
            //dd($provider_user);

            $user = User::where([
                'provider' => $provider,
                'provider_id' => $provider_user->id
            ])->first();

            if (!$user) {
                $user = User::create([
                    'name' => $provider_user->name,
                    'email' => $provider_user->email,
                    'provider' => $provider,
                    'provider_id' => $provider_user->id,
                    'provider_token' => $provider_user->token,
                ]);
            }
            

            Auth::login($user);

            return redirect()->route('profile');
        } catch (Throwable $e) {
            return redirect()->route('login')->withErrors([
                'email' => $e->getMessage(),
            ]);
        }
    }
    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }




    /*public function callback($provider)
{
    try {
        $provider_user = Socialite::driver($provider)->user();
        dd($provider_user);
        // ...

    } catch (Throwable $e) {
        // Log the exception
        logger()->error('Social login error', ['exception' => $e]);

        return redirect()->route('login')->withErrors([
            'email' => $e->getMessage(),
        ]);
    }
    */
}
