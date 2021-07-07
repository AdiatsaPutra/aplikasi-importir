@extends('layouts.dashboard')
@section('title')
    Barang Export
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Barang Export
            </button>
            @include('includes.add_barang_export_modal')
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama</th>
                            <th>Jenis</th>
                            <th>Asal</th>
                            <th>Tanggal Export</th>
                            <th>Foto</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($barangExport as $item)
                        <tr>
                            <td>
                                {{ $item->nama }}
                            </td>
                            <td>
                                {{ $item->jenis }}
                            </td>
                            <td>
                                {{ $item->tujuan }}
                            </td>
                            <td>
                                {{ $item->tanggal_export }}
                            </td>
                            <td>
                                <img src="{{ $item->foto }}" alt="" width="150px">
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
                        <tr class="text-center">
                            <td colspan="6">
                                Belum Ada Data
                            </td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection