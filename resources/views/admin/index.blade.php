@extends('layouts.dashboard')
@section('title')
    Admin - Dashboard
@endsection
@section('content')
<div class="row">
  <div class="col-12 col-sm-4 col-lg-4">
    <div class="card text-center">
      <div class="card-header">
        <h4>Total Customer</h4>
      </div>
      <div class="my-3">
       <h1>{{ App\Models\Customer::all()->count() }}</h1>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-4 col-lg-4">
    <div class="card text-center">
      <div class="card-header">
        <h4>Total Barang Import</h4>
      </div>
      <div class="my-3">
       <h1>{{ App\Models\BarangImport::all()->count() }}</h1>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-4 col-lg-4">
    <div class="card text-center">
      <div class="card-header">
        <h4>Total Barang Export</h4>
      </div>
      <div class="my-3">
       <h1>{{ App\Models\BarangExport::all()->count() }}</h1>
      </div>
    </div>
  </div>
</div>
@endsection