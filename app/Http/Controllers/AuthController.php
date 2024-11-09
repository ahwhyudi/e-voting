<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

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

        dd($user);
    }
}
