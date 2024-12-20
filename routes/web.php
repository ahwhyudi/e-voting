<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\DashboarController;
use App\Http\Controllers\Admin\DPTController;
use App\Http\Controllers\Admin\KandidatController;
use App\Http\Controllers\Admin\PaslonController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\DepanController;
use App\Http\Controllers\Front\ProfileKandidatController;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\Admin\CalonLiveWire;
use App\Http\Livewire\Admin\DashboardLiveWire;
use App\Http\Livewire\Admin\PaslonCreateLiveWire;
use App\Http\Livewire\Admin\PaslonLiveWire;
use App\Http\Livewire\Admin\RoomLiveWire;
use App\Http\Livewire\Admin\TambahKandidatLiveWire;
use App\Http\Livewire\Admin\UserLiveWire;
use App\Http\Livewire\Front\FrontRoomLiveWire;
use App\Http\Livewire\Front\VotingLiveWire;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;
use Spatie\Analytics\Period;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('show', function () {
    $user = User::get();
    return response()->json([$user]);
});

Route::get('/', function () {
    dd("CEK");
    return view('welcome');
});

Route::post("voting", [HomeController::class, "voting"])->name("voting")->middleware("auth");


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// admin
Route::middleware("auth:admin")
    ->group(function () {
        Route::get('/dashboard', [DashboarController::class, "index"])->name('dashboard-admin');
        Route::get('dashboard/users', UserLiveWire::class)->name('livewire-user');
        Route::get('dashboard/rooms', RoomLiveWire::class)->name('livewire-room');
        Route::get('dashboard/calons', CalonLiveWire::class)->name('livewire-calon');
        Route::get('dashboard/calons/tambah', TambahKandidatLiveWire::class)->name('livewire-calon-create');
        Route::resource('dashboard/calons/paslon', PaslonController::class);
        Route::resource('dashboard/dpt', DPTController::class);
        Route::resource('dashboard/data-admin', AdminController::class);
    });


Route::prefix("dashboard")->name("dashboard.")->group(function () {
    // Route::prefix()
    Route::resource("kandidat", KandidatController::class);
    Route::resource("paslon", PaslonController::class);
});


// front
Route::get('profile-kandidat/{id}', [ProfileKandidatController::class, 'index'])->name('profile');
Route::get('/', [DepanController::class, 'index'])->name('depan');

Route::get('room', FrontRoomLiveWire::class)->name('front-room')->middleware('auth');
Route::get('pilih', VotingLiveWire::class)->middleware('auth')->name('pilih');
Route::get('vote/{id}', [ProfileKandidatController::class, 'vote'])->name('vote')->middleware('auth');


Route::get('logout', function () {
    Auth::logout();
    Auth::guard("admin")->logout();
    return redirect('/');
})->name('logout');



// cek duplikat
Route::get('duplikat', function () {
    $data = User::whereIn('username', function ($query) {
        $query->select('username')->from('users')->groupBy('username')->havingRaw('count(*) > 1');
    })->get();
    return response()->json($data);
});

Route::get('secret', function () {
    $user = User::with('suara')->get();

    return response()->json([$user]);
})->middleware('auth', 'admin');


Route::get("editProfile", [AuthController::class, "editProfile"])->name("editProfile")->middleware("auth");
Route::post("updatePassword", [AuthController::class, "updatePassword"])->name("updatePassword")->middleware("auth");


Route::post("prosesLogin", [AuthController::class, "prosesLogin"])->name("prosesLogin");

Route::post("loginAdmmin", [AuthController::class, "loginAdmmin"])->name("loginAdmmin")->middleware("guest:admin");
Route::get("login-admin", function () {
    return view("login_admin");
})->middleware("guest:admin");
