<?php

use App\Http\Controllers\BarangexportController;
use App\Http\Controllers\BarangimportController;
use App\Http\Controllers\CustomerController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes([
    'register' => false,
    'reset' => false,
    'verify' => false,
  ]);

Route::prefix('dashboard')
    ->middleware('admin')
    ->group(function () {
        Route::get('/admin', function () {
            return view('admin.index');
        });
        
        Route::resources([
            'customers' => CustomerController::class,
            'barang-import' => BarangimportController::class,
            'barang-export' => BarangexportController::class,
        ]);
    });

