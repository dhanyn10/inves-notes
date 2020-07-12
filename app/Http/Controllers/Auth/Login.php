<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\User;

class Login extends Controller
{
    public function index()
    {
        return view('auth.login');
    }
    public function login(Request $request)
    {
        $email      = $request->input('email');
        $password   = $request->input('password');

        //ambil data keseluruhan user dengan email
        $dbuser = User::where('email', $email)->get();
        //ambil data email
        $dbmail = $dbuser->pluck('email')->first();

        if($email == $dbmail)
        {
            $dbpassword = $dbuser->pluck('password')->first();

            if(Hash::check($password, $dbpassword))
            {
                session([
                    'email'    => $email
                    ]);
                return redirect()->route('user.dashboard');
            }
            else
            {
                flash('password salah')->error();
            }
        }
        else
        {
            flash('email salah')->error();
        }
        return redirect()->route('login');
    }
}
