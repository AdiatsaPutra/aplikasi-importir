@extends('layouts.dashboard')
@section('title')
    Data Barang Import
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card p-5">
            <table id="table" class="table table-stripped" style="width: 100%">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jenis</th>
                        <th>Asal</th>
                        <th>Tanggal Import</th>
                        <th>Foto</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($barangImport as $barang)
                    <tr>
                        <td>
                            {{ $barang->nama }}
                        </td>
                        <td>
                            {{ $barang->jenis }}
                        </td>
                        <td>
                            {{ $barang->asal }}
                        </td>
                        <td>
                            {{ $barang->tanggal_import }}
                        </td>
                        <td>
                            <img src="{{ $barang->foto }}" alt="" width="100px">
                        </td>
                        <td>
                            <div class="row">
                                <div class="col">
                                    <a href="" class="btn btn-primary btn-block">Detail</a>
                                </div>
                                <div class="col">
                                    <a href="" class="btn btn-warning btn-block">Edit</a>
                                </div>
                                <div class="col">
                                    <a href="" class="btn btn-danger btn-block">Delete</a>
                                </div>
                            </div>
                        </td>
                    </tr>
                    @empty
                    <tr>
                        <td colspan="3">
                            Tidak Ada Data
                        </td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
        @endsection