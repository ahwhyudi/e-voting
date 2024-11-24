<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use App\Models\Suara;
use Illuminate\Http\Request;

class DepanController extends Controller
{
    public function index()
    {
        $paslon = Paslon::orderBy('nomor', 'asc')->get();

        $suara = Suara::where("user_id", auth()->user()->id ?? null)->first();


        return view('index', [
            'paslons' => $paslon,
            "suara" => $suara
        ]);
    }
}
