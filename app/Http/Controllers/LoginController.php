<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Laravel\Socialite\Facades\Socialite;

class LoginController extends Controller
{
    public function home(){
        return view('home', [
            'title' => 'Home | Page'
        ]);
    }

    public function login(){
        return view('login',[
            'title' => 'Login | Page'
        ]);
    }

    public function actionlogin(Request $request){
        $validate = $request->validate([
            'email'     => 'required',
            'password'  => 'required'
        ]);
        $data = [
            'email'     => $request->input('email'),
            'password'  => $request->input('password')
        ];
        if(Auth::attempt($validate)){
            return redirect('post');
        }else{
            $request->session()->flash('error', 'Email atau Password salah!');
            return redirect('/login');
        }

    }

        public function logout(){
            Auth::logout();
            request()->session()->invalidate();
            request()->session()->regenerateToken();
            return redirect('/');
    }
    public function redirectToProvider()
    {
        return Socialite::driver('google')->redirect();
    }

    public function handleProviderCallback(Request $request)
    {
        try {
            $user_google    = Socialite::driver('google')->user();
            $user           = User::where('email', $user_google->getEmail())->first();

            if($user != null){
                \auth()->login($user, true);
                return redirect('post');
            }else{
                $create = User::Create([
                    'email'             => $user_google->getEmail(),
                    'name'              => $user_google->getName(),
                    'password'          => 0,
                    'email_verified_at' => now() // fungsi tgl saat ini
                ]);

                \auth()->login($create, true);
                return redirect()->route('post');
            }

        } catch (\Exception $e) {
            return redirect('login');
        }


    }


}
