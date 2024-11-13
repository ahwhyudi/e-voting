<?php

namespace App\Http\Controllers;

use App\Models\Paslon;
use Illuminate\Http\Request;

class DepanController extends Controller
{
    public function index()
    {
        $paslon = Paslon::orderBy('nomor', 'asc')->get();

        return view('index', [
            'paslons' => $paslon
        ]);
    }
}
