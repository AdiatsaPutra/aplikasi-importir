@extends('layouts.dashboard')
@section('title')
    Customers
@endsection
@section('content')
    <div class="row">
        <div class="col">
            <button type="button" class="btn btn-primary mb-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
                Tambah Customer
            </button>
            @include('includes.add_customer_modal')
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
                            <th>Barang Import</th>
                            <th>Barang Export</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($customers as $customer)
                        <tr>
                            <td>
                                {{ $customer->nama }}
                            </td>
                            <td>
                                {{ $customer->nama }}
                            </td>
                            <td>
                                {{ $customer->nama }}
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
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-block">HAPUS</button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="3">
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