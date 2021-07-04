@extends('layouts.dashboard')
@section('title')
    Data Barang Import
@endsection
@section('content')
<button class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Aw, yeah!</button>

<div class="modal fade" tabindex="-1" role="dialog" id="exampleModal">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Modal title</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <p>Modal body text goes here.</p>
        </div>
        <div class="modal-footer bg-whitesmoke br">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          <button type="button" class="btn btn-primary">Save changes</button>
        </div>
      </div>
    </div>
  </div>
</div>
    <div class="container-fluid">
        <div class="card p-5">
            <div class="row">
                <div class="col">
                    
                </div>
            </div>
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