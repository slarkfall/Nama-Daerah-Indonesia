<?php

namespace App\Http\Controllers;

use App\Models\kabupaten;
use App\Models\provinsi;
use App\Models\kecamatan;
use Illuminate\Http\Request;

class KecamatanController extends Controller
{
    public function index()
    {

        return view('kecamatan.index',[
        'kecamatans' => Kecamatan::all()
    ]);

    }

    public function create()
    {
        return view('kecamatan.create',[
            'provinsis' => provinsi::all(),
            'kabupatens' => kabupaten::all()
        ]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'provinsi_id' => 'required|integer',
            'kabupaten_id' => 'required|integer',
        ]);

        Kecamatan::create($request->all());
        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan has been added!');
    }

    public function edit(Kecamatan $kecamatan)
    {
        return view('kecamatan.edit',[
            'kecamatan' => $kecamatan,
            'provinsis' => provinsi::all(),
            'kabupatens' => kabupaten::all()
        ]);

    }

    public function update(Request $request, Kecamatan $kecamatan)
    {
        $request->validate([

            'name' => 'required|string|max:255',
            'provinsi_id' => 'required|integer',
            'kabupaten_id' => 'required|integer',
        ]);

        $kecamatan->update($request->all());

        return redirect()->route('kecamatan.index')->with('success', 'Kecamatan telah berhasil diupdate');


    }

    public function destroy(Kecamatan $kecamatan)
    {
        $kecamatan->delete();

        return redirect()->route('kecamatan.index')->with('Success', 'Kecamatan Berhasil di Hapus');
    }
}
