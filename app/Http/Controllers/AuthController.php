<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function prosesLogin(Request $request)
    {
        $user = User::where("nisn", $request->nisn)->first();

        if (!$user) {
            return redirect()->back()
                ->withErrors([
                    "nisn" => "NISN tidak ditemukan"
                ]);
        }

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()
                ->withErrors([
                    "nisn" => "Password salah"
                ]);
        }

        Auth::login($user);

        return redirect()->intended('/');
    }
}
