<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // fungsi yg akan dieksekusi saat register ditekan
    public function signUpAction(Request $request)
    {
        // jika password salah
        if ($request->password != $request->confirm) {
            session()->flash("error", "Wrong confirm password!");
            return redirect(route("sign-up"));
        }

        $usernameExist = User::where("username", $request->username)->first();
        if ($usernameExist) {
            session()->flash("error", 'The username is already taken.');
            return redirect(route("sign-up"));
        }

        // buat akun ke database
        User::create(
            [
                'name' => $request->name,
                'username' => $request->username,
                'password' => Hash::make($request->password),
            ]
        );

        session()->flash("success", "You've successfully signed up.");
        return redirect(route("sign-up"));
    }

    public function loginAction(Request $request)
    {
        $data = [
            "username" => $request->username,
            "password" => $request->password
        ];

        if (Auth::attempt($data)) {
            return redirect(route("admin.dashboard"));
        } else {
            session()->flash('error', 'Login failed.');
            return redirect(route("login"));
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect(route("home"));
    }
}
