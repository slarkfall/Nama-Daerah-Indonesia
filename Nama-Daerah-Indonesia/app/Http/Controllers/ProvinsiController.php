<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use Illuminate\Http\Request;

class ProvinsiController extends Controller
{
    public function index()
    {

        return view('provinsi.index',[
        'provinsis' => Provinsi::all()
    ]);

    }

    public function create()
    {
        return view('provinsi.create');

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',


        ]);

        Provinsi::create($request->all());
        return redirect()->route('provinsi.index')->with('success', 'Provinsi has been added!');
    }

    public function edit(Provinsi $provinsi)
    {
        return view('provinsi.edit', compact('provinsi'));

    }

    public function update(Request $request, Provinsi $provinsi)
    {
        $request->validate([
            'name' => 'required|string|max:255',
        ]);

        $provinsi->update($request->all());

        return redirect()->route('provinsi.index')->with('success', 'Provinsi telah berhasil diupdate');


    }

    public function destroy(Provinsi $provinsi)
    {
        $provinsi->delete();

        return redirect()->route('provinsi.index')->with('Success', 'Provinsi Berhasil di Hapus');
    }
}
