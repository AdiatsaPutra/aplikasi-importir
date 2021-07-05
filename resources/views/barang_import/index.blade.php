@extends('layouts.dashboard')
@section('title')
    Barang Import
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Barang Import
            </button>
            @include('includes.add_barang_import_modal')
        </div>
    </div>
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Data Customer</h6>
        </div>
        <div class="card-body">
            @if (Session::has('success'))
                <p>berhasil</p>
            @endif
            <div class="table-responsive">
                <table class="table table-bordered" id="table" width="100%" cellspacing="0">
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
                        @forelse ($barangImport as $item)
                        <tr>
                            <td>
                                {{ $item->nama }}
                            </td>
                            <td>
                                {{ $item->jenis }}
                            </td>
                            <td>
                                {{ $item->asal }}
                            </td>
                            <td>
                                {{ $item->tanggal_import }}
                            </td>
                            <td>
                                <img src="{{ Storage::url('public/barang_import/').$item->foto }}" alt="" width="100px">
                            </td>
                            <td>
                                <div class="row">
                                    <div class="col">
                                        <a class="btn btn-success btn-block" data-bs-toggle="modal" data-bs-target="#detailModal{{ $item->id }}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a href="" class="btn btn-warning btn-block">Edit</a>
                                    </div>
                                    <div class="col">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('barang-import.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('delete')
                                            <button type="submit" class="btn btn-danger btn-block"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @include('includes.detail_barang_import')
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