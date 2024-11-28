<?php

namespace App\Http\Controllers;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

use Illuminate\Http\Request;

class GoogleController extends Controller
{
     
    public function redirectTogoogle()
    {
        return Socialite::driver('google')->redirect();
        
    }
    public function handlegoogleCallback()
    {
        try{
            $googleuser = Socialite::driver('google')->user();
            $finduser = User::where('google_id',$googleuser->getId())->first();
            if (!$finduser) {
                $user = User::create([
                    'name' =>$googleuser->getName(),
                    'email'=>$googleuser->getEMail(),
                    'google_id' => $googleuser->getId(),
                    'password' => Hash::make('testingdmin@123'),  

                ]);
                
            }else {
                
                $user = $finduser;
            }
            Auth::login($user, true);
        return redirect()->route('googlepage');

        }catch(Exception $ex)
        {
            return redirect('/login')->with('error', 'Something went wrong with Facebook login.');
        }
    }
   
}
