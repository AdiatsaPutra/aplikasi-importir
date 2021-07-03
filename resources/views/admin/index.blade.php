@extends('layouts.dashboard')
@section('title')
    Admin - Dashboard
@endsection
@section('content')
<div class="row">
  <div class="col-12 col-sm-4 col-lg-4">
    <div class="card">
      <div class="card-header">
        <h4>Customer</h4>
      </div>
      <div class="collapse show" id="mycard-collapse">
        <div class="card-body">
          You can show or hide this card.
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-4 col-lg-4">
    <div class="card">
      <div class="card-header">
        <h4>Total Barang Import</h4>
      </div>
      <div class="collapse show" id="mycard-collapse">
        <div class="card-body">
          You can show or hide this card.
        </div>
      </div>
    </div>
  </div>
  <div class="col-12 col-sm-4 col-lg-4">
    <div class="card">
      <div class="card-header">
        <h4>Total Barang Export</h4>
      </div>
      <div class="collapse show" id="mycard-collapse">
        <div class="card-body">
          You can show or hide this card.
        </div>
      </div>
    </div>
  </div>
</div>
@endsection