<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function  redirect()
    {
        return Socialite::driver('facebook')->redirect();
    }

    public function randomusername($name) {

        $firstname = strtolower($name);
        $nrRand = rand(0, 100);
        return $firstname . $nrRand;
    }


    public function  callback()
    {
        $data = Socialite::driver('facebook')->user();

        //$user = User::where("email", $data->email)->first();

        $user = User::firstOrCreate([
            'name' => $data->name,
            'password' => Hash::make(Str::random(24)),
            'username' => $this->randomusername(preg_replace("/\s+/", "", $data->name))
        ],
            [
                'email' => $data->email,
            ]
        );
        auth()->login($user);
        if (auth()->check())
            return redirect(view('profiles.index'));



    }
}
