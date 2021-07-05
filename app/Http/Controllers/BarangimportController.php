<?php

namespace App\Http\Controllers;

use App\Models\BarangImport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangimportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangImport = BarangImport::all();
        return view('barang_import.index', compact('barangImport'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $foto = $request->file('foto');
        $foto->storeAs('public/barang_import', $foto->hashName());

        BarangImport::create([
            'foto'   => $foto->hashName(),
            'nama'   => $request->nama,
            'jenis'  => $request->jenis,
            'asal'   => $request->asal,
            'tanggal_import'   => $request->tanggal_import,
        ]);

        return redirect()->route('barang-import.index')->with('success', 'Data Barang Import Berhasil Disimpan!');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barangimport  $barangimport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Barangimport $barangImport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangimport  $barangimport
     * @return \Illuminate\Http\Response
     */
    public function destroy(BarangImport $barangImport)
    {

        Storage::disk('local')->delete('public/barang_import/' . $barangImport->foto);
        $barangImport->delete();

        return redirect()->route('barang-import.index')->with('success', 'Data Barang Import Berhasil Disimpan!');
    }
}
