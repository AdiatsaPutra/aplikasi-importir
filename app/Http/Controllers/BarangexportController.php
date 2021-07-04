<?php

namespace App\Http\Controllers;

use App\Models\BarangExport;
use Illuminate\Http\Request;

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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
    public function update(Request $request, barangexport $barangexport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\barangexport  $barangexport
     * @return \Illuminate\Http\Response
     */
    public function destroy(barangexport $barangexport)
    {
        //
    }
}
