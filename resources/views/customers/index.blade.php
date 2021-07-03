@extends('layouts.dashboard')
@section('title')
    Data Customers
@endsection
@section('content')
    <div class="container-fluid">
        <table id="table" class="table table-stripped" style="width: 100%">
            <thead>
                <tr>
                    <th>Column 1</th>
                    <th>Column 2</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Row 1 Data 1</td>
                    <td>Row 1 Data 2</td>
                </tr>
                <tr>
                    <td>Row 2 Data 1</td>
                    <td>Row 2 Data 2</td>
                </tr>
            </tbody>
        </table>
    </div>
@endsection