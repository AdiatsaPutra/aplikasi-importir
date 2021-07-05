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
                                        <a class="btn btn-success btn-block" data-bs-toggle="modal" data-bs-target="#detailModal{{ $customer->id }}">
                                            <i class="far fa-eye"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <a class="btn btn-warning btn-block" data-bs-toggle="modal" data-bs-target="#editModal{{ $customer->id }}">
                                            <i class="far fa-edit"></i>
                                        </a>
                                    </div>
                                    <div class="col">
                                        <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('customers.destroy', $customer->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-block"><i class="far fa-trash-alt"></i></button>
                                        </form>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        @include('includes.detail_customer')
                        @include('includes.edit_customer')
                        @empty
                        <tr class="text-center">
                            <td colspan="4">
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