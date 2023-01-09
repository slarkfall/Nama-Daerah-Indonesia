<?php

namespace App\Http\Controllers;

use App\Models\provinsi;
use App\Models\kabupaten;
use Illuminate\Http\Request;

class KabupatenController extends Controller
{
    public function index()
    {
        $kabupatens = kabupaten::with(['provinsi'])->get();
        return view('kabupaten.index',compact('kabupatens'));

    }

    public function create()
    {
        return view('kabupaten.create',[
            'provinsis' => provinsi::all()
        ]);

    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'provinsi_id' => 'required|integer',
        ]);

        Kabupaten::create($request->all());
        return redirect()->route('kabupaten.index')->with('success', 'Kabupaten has been added!');
    }

    public function edit(Kabupaten $kabupaten)
    {
        return view('kabupaten.edit',[
            'kabupaten' => $kabupaten,
            'provinsis' => provinsi::all()
        ]);

    }

    public function update(Request $request, Kabupaten $kabupaten)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'provinsi_id' => 'required|integer',
        ]);

        $kabupaten->update($request->all());

        return redirect()->route('kabupaten.index')->with('success', 'Kabupaten telah berhasil diupdate');


    }

    public function destroy(Kabupaten $kabupaten)
    {
        $kabupaten->delete();

        return redirect()->route('kabupaten.index')->with('Success', 'kabupaten Berhasil di Hapus');
    }
}
