<?php

namespace App\Http\Controllers;

use App\Models\desa;
use App\Models\provinsi;
use App\Models\kabupaten;
use App\Models\kecamatan;
use Illuminate\Http\Request;

class DesaController extends Controller
{
    public function index()
    {

        return view('desa.index',[
        'desas' => Desa::all()
    ]);

    }

    public function create()
    {
        return view('desa.create',[
            'provinsis' => provinsi::all(),
            'kabupatens' => kabupaten::all(),
            'kecamatans' => kecamatan::all()
        ]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'provinsi_id' => 'required|integer',
            'kabupaten_id' => 'required|integer',
            'kecamatan_id' => 'required|integer'
        ]);

        Desa::create($request->all());
        return redirect()->route('desa.index')->with('success', 'Desa has been added!');
    }

    public function edit(Desa $desa)
    {
        return view('desa.edit',[
            'desa' => $desa,
            'provinsis' => provinsi::all(),
            'kabupatens' => kabupaten::all(),
            'kecamatans' => kecamatan::all()
        ]);
    }

    public function update(Request $request, Desa $desa)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'provinsi_id' => 'required|integer',
            'kabupaten_id' => 'required|integer',
            'kecamatan_id' => 'required|integer'
        ]);

        $desa->update($request->all());

        return redirect()->route('desa.index')->with('success', 'Desa telah berhasil diupdate');


    }

    public function destroy(Desa $desa)
    {
        $desa->delete();

        return redirect()->route('desa.index')->with('Success', 'Desa Berhasil di Hapus');
    }
}
