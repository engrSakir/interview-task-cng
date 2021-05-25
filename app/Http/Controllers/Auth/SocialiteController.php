<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirectToGoogle(){
        return Socialite::driver('google')->redirect();
    }
    public function handleGoogleCallback(){

    }

    public function redirectToFacebook(){
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback(){

    }

    public function redirectToGitHub(){
        return Socialite::driver('github')->redirect();
    }
    public function handleGitHubCallback(){
        $user = Socialite::driver('github')->user();
        $this->registerOrLoginUser($user);
        // Return home after login
        return redirect()->route('dashboard');
    }

    protected function registerOrLoginUser($data)
    {
        $user = User::where('email', '=', $data->email)->first();
        if (!$user) {
            $user = new User();
            $user->name = $data->name;
            $user->email = $data->email;
            $user->provider_id = $data->id;
            $user->avatar = $data->avatar;
            $user->password = bcrypt(Str::random(22));
            $user->save();
        }

        if (! Auth::attempt($user->email)) {
            return redirect()->route('login');
        }
    }

}
