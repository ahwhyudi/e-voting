<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use App\Models\Suara;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        dd("CEK");
        return view('home');
    }

    public function voting(Request $request)
    {
        $data = [
            "paslon_id" => $request->paslon_id,
            "user_id" => auth()->user()->id
        ];

        /* Cek password */
        $user = User::where("id", auth()->user()->id)->first();

        if (!Hash::check($request->password, $user->password)) {
            return redirect()->back()->with("error", "Password Anda Salah!");
        }


        $suara = Suara::where("user_id", auth()->user()->id)->first();

        if ($suara) {
            return redirect()->back()->with("error", "Anda sudah pernah memilih");
        }

        $insert = Suara::create($data);

        return redirect()->back()->with("success", "Pemiliha telah berhasil dilakukan");
    }
}
