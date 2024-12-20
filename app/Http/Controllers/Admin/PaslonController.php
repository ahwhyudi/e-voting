<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\PaslonRequest;
use App\Models\Kandidat;
use App\Models\Paslon;
use Illuminate\Http\Request;

class PaslonController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $paslon = Paslon::orderBy("id", "desc")->get();

        return view('pages.admin.paslon.index', [
            'items' => $paslon
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {


        return view('pages.admin.paslon.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->except("_token", "_method");
        $image = $request->file('foto')->store('image/paslon', 'public');
        $data['foto'] = $image;

        $paslon = Paslon::create($data);

        return redirect()->route('dashboard.paslon.index')->with('success', 'berhasil tambah pasangan calon');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $paslon = Paslon::findOrFail($id);

        return view('pages.admin.paslon.edit', compact("paslon"));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $paslon = Paslon::findOrFail($id);
        $data = $request->except("_token", "_method");

        if ($request->foto) {
            $image = $request->file('foto')->store('image/paslon', 'public');
            $data['foto'] = $image;
        }

        $paslon->update($data);


        return redirect()->route('dashboard.paslon.index')->with('success', 'berhasil update pasangan calon');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $paslon = Paslon::findOrFail($id);
        $paslon->delete();

        return redirect()->route('dashboard.paslon.index')->with('success', 'berhasil hapus pasangan calon');
    }
}
