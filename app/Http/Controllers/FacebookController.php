<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FacebookController extends Controller
{
    
    public function index()
    {
        return view('facebook_post');
    }
    public function redirectToFacebook()
    {
        return Socialite::driver('facebook')->redirect();
    }
    public function handleFacebookCallback()
    {
        try {
            $facebookUser = Socialite::driver('facebook')->user();
            
             $user = User::where('facebook_id', $facebookUser->getId())->first();
             if (!$user) {
                $user = User::create([
                    'name' => $facebookUser->getName(),
                    'email' => $facebookUser->getEmail(),
                    'facebook_id' => $facebookUser->getId(),
                    'password' => Hash::make('Ddmin@123'),  
                ]);
            }
         Auth::login($user, true);
        return redirect()->route('home');
    } catch (\Exception $e) {
         return redirect('/login')->with('error', 'Something went wrong with Facebook login.');
        }
    }
}
