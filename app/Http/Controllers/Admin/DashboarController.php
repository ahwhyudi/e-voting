<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class DashboarController extends Controller
{
    public function index()
    {
        $users = User::get();
        $ygSudahMilih = User::whereHas("suara")->get();
        $ygBelumMilih = User::doesntHave("suara")->get();

        return view("pages.dashboard", compact("users", "ygSudahMilih", "ygBelumMilih"));
    }
}
