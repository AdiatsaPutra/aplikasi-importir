<?php

namespace App\Http\Controllers;

use App\Models\BarangExport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class BarangexportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barangExport = BarangExport::all();
        return view('barang_export.index', compact('barangExport'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
        $foto->storeAs('public/barang_export', $foto->hashName());

        BarangExport::create([
            'foto'   => $foto->hashName(),
            'nama'   => $request->nama,
            'jenis'  => $request->jenis,
            'tujuan'   => $request->tujuan,
            'tanggal_export'   => $request->tanggal_export,
        ]);

        return redirect()->route('barang-export.index')->with('success', 'Data Barang Export Berhasil Disimpan!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\barangexport  $barangexport
     * @return \Illuminate\Http\Response
     */
    public function show(barangexport $barangexport)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\barangexport  $barangexport
     * @return \Illuminate\Http\Response
     */
    public function edit(barangexport $barangexport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\barangexport  $barangexport
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BarangExport $barangExport)
    {
        if ($request->file('foto') == "") {

            $barangExport->update([
                'nama'     => $request->nama,
                'jenis'   => $request->jenis,
                'tujuan'   => $request->tujuan,
                'tanggal_export'   => $request->tanggal_export,
            ]);
        } else {

            Storage::disk('local')->delete('public/barang_export/' . $barangExport->foto);

            $foto = $request->file('foto');
            $foto->storeAs('public/barang_export', $foto->hashName());

            $barangImport->update([
                'foto'     => $foto->hashName(),
                'nama'     => $request->nama,
                'jenis'   => $request->jenis,
                'tujuan'   => $request->tujuan,
                'tanggal_export'   => $request->tanggal_export,
            ]);
        }

        return redirect()->route('barang-export.index')->with('success', 'Data Berhasil Diupdate!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangexport  $barangexport
     * @return \Illuminate\Http\Response
     */
    public function destroy(barangexport $barangExport)
    {
        Storage::disk('local')->delete('public/export/' . $barangExport->foto);
        $barangExport->delete();

        return redirect()->route('barang-export.index')->with('success', 'Data Barang Export Berhasil Disimpan!');
    }
}
