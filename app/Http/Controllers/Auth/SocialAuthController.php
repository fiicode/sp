<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Laravel\Socialite\Facades\Socialite;
use Laravel\Socialite\Two\InvalidStateException;

class SocialAuthController extends Controller
{
    public function redirect($service) {
        return Socialite::driver($service )->redirect();
    }
    public function callback($service) {
//        dd(Socialite::driver($service)->stateless()->user());
//        try {
//            $user = Socialite::driver($service)->stateless()->user();
//            return view( 'user.components.home')->withDetails($user)->withService($service);
//        }catch (Exception $e) {
//            return redirect("redirect/$service");
//        }
//        try {
        $user = Socialite::driver($service)->user();
//        } catch (InvalidStateException $e) {
//            $user = Socialite::driver($service)->stateless()->user();
//        }
//        $token = $user->token;
//        $refreshToken = $user->refreshToken; // not always provided
//        $expiresIn = $user->expiresIn;
//        $token = $user->token;
//        $tokenSecret = $user->tokenSecret;
//        $user = Socialite::driver($service)->userFromToken($token);
//        dd($user,$user->email,$user->avatar, $user->user['given_name']);
        $checkUser = User::where('email', '=', $user->email)
              ->where('name', '=', $user->name)
            ->first();
        if($checkUser){
            Auth::login($checkUser);
            return redirect()->route('home');
        }
        switch ($service) {
            case 'facebook':
                $user = User::updateOrCreate([
                    'avatar' => $user->avatar,
                    'name' => $user->name,
                    'email' => $user->email,
                    'provider' => $service,
                    'provider_id' => $user->id,
                    'access_token' => $user->token,
                    'user_social_auth'=>true,
                    // user can use reset password to create a password
                    'password' => ''
                ]);
                break;
            case 'google':
                $user = User::updateOrCreate([
                    'avatar' => $user->avatar,
                    'name' => $user->name,
                    'username' => $user->user['given_name'],
                    'email' => $user->email,
                    'provider' => $service,
                    'provider_id' => $user->id,
                    'access_token' => $user->token,
                    'user_social_auth'=>true,
                    'active' => $user->user['email_verified'] ? true : false,
                    // user can use reset password to create a password
                    'password' => ''
                ]);
                break;
            case 'github':
                $user = User::updateOrCreate([
                    'avatar' => $user->avatar,
                    'name' => $user->name,
                    'username' => $user->nickname,
                    'email' => $user->email,
                    'provider' => $service,
                    'provider_id' => $user->id,
                    'access_token' => $user->token,
                    'user_social_auth'=>true,
//                    'active' => $user->user['email_verified'] ? true : false,
                    // user can use reset password to create a password
                    'password' => ''
                ]);
                break;
            default:
        }

        Auth::login($user);

        return redirect()->route('home');
    }
}
