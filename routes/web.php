<?php

use App\Http\Controllers\PemesananController;
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
    return view('index');
});
Route::resource('/pemesanan', PemesananController::class);
Route::get('/krui', function () {
    return view('krui');
});
Route::get('/airterjuntanggamus', function () {
    return view('airterjun');
});
Route::get('/pahawang', function () {
    return view('pahawang');
});
Route::get('/gisting', function () {
    return view('gisting');
});
Route::get('/harga', function () {
    return view('harga');
});
