<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Socialite\Facades\Socialite;

class SocialiteController extends Controller
{
    public function redirect()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request)
        {
            try {
                $user_google    = Socialite::driver('google')->user();
                $user           = User::where('email', $user_google->getEmail())->first();

                //jika user ada maka langsung di redirect ke halaman home
                //jika user tidak ada maka simpan ke database
                //$user_google menyimpan data google account seperti email, foto, dsb

                if($user != null){
                    \auth()->login($user, true);
                    return redirect()->route('member.dashboard');
                }else{
                    $create = User::Create([
                        'email'             => $user_google->getEmail(),
                        'name'              => $user_google->getName(),
                        'password'          => 0,
                        'role'              => 'user',
                        'province_id'       => 0,
                        'city_id'           => 0,
                        'subdistrict_id'    => 0,
                        'postcode'          => 0,
                        'address'           => 0,
                        'phone'             => 0,
                        'email_verified_at' => now()
                    ]);


                    \auth()->login($create, true);
                    return redirect()->route('profile.edit')->with('error','Segera lengkapi profile anda');
                }

            } catch (\Exception $e) {
                return redirect()->route('login');
            }


        }
}
