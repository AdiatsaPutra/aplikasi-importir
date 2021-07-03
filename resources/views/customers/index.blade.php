@extends('layouts.dashboard')
@section('title')
    Data Customers
@endsection
@section('content')
    <div class="container-fluid">
        <div class="card p-5">
            <table id="table" class="table table-stripped" style="width: 100%">
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