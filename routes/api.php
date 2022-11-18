<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\RegisterController;
use App\Http\Controllers\Api\LoginController;
use App\Http\Controllers\Api\LogoutController;
use App\Http\Controllers\KendaraanController;
use App\Http\Controllers\PDFController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

/*  Authorization JWT   */
Route::post('/register', RegisterController::class)->name('register');

Route::post('/login', LoginController::class)->name('login');

Route::post('/logout', LogoutController::class)->name('logout');

/*  Stok Kendaraan   */
Route::get('/kendaraan/motor', [KendaraanController::class, 'getStokMotor']);

Route::get('kendaraan/mobil', [KendaraanController::class, 'getStokMobil']);

/*  Laporan Penjualan per kendaraan   */
Route::get('/generate-pdf', [PDFController::class, 'generatePDF']);

/*  CRUD   */
Route::resource('kendaraan', KendaraanController::class);
/*
Route::get('/kendaraan', [KendaraanController::class, 'show']);

Route::get('/kendaraan', [KendaraanController::class, 'destroy']);
*/