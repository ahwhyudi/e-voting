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

    public function loginAdmmin(Request $request)
    {
        if (auth()->guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect("/dashboard");
        }

        return redirect()->back()->withErrors([
            'email' => "Email atau password salah"
        ])->withInput();
    }

    public function editProfile()
    {
        return view("pages.profile");
    }

    public function updatePassword(Request $request)
    {
        $user = User::where("id", auth()->user()->id)->update([
            "password" => Hash::make($request->password)
        ]);

        return redirect()->back()->with("success", "Berhasil update profile");
    }
}
