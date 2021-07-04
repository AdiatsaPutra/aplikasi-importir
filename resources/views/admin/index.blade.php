@extends('layouts.dashboard')
@section('title')
    Selamat Datang
@endsection
@section('content')
<div class="dashboard-banner container-fluid mb-5 rounded">
  {{-- <img class="img-fluid h-full" src="https://images.unsplash.com/photo-1605745341112-85968b19335b?ixid=MnwxMjA3fDB8MHxzZWFyY2h8MXx8Y29udGFpbmVyJTIwc2hpcHxlbnwwfHwwfHw%3D&ixlib=rb-1.2.1&w=1000&q=80" alt=""> --}}
</div>
<div class="row">
  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-primary shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-lg font-weight-bold text-primary text-uppercase mb-1">
                          Customer</div>
                      <h1 class="text-xl mb-0 font-weight-bold text-gray-800">{{ App\Models\Customer::all()->count() }}</h1>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-calendar fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-lg font-weight-bold text-success text-uppercase mb-1">
                          Barang Export</div>
                      <h1 class="text-xl mb-0 font-weight-bold text-gray-800">{{ App\Models\BarangExport::all()->count() }}</h1>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>

  <div class="col-xl-3 col-md-6 mb-4">
      <div class="card border-left-info shadow h-100 py-2">
          <div class="card-body">
              <div class="row no-gutters align-items-center">
                  <div class="col mr-2">
                      <div class="text-lg font-weight-bold text-info text-uppercase mb-1">Barang Import
                      </div>
                      <div class="row no-gutters align-items-center">
                          <div class="col-auto">
                              <h1 class="text-xl mb-0 mr-3 font-weight-bold text-gray-800">{{ App\Models\BarangImport::all()->count() }}</h1>
                          </div>
                      </div>
                  </div>
                  <div class="col-auto">
                      <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                  </div>
              </div>
          </div>
      </div>
  </div>
</div>
@endsection