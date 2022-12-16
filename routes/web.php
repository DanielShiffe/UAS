<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

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
    $stok_produk = DB::table('vstok')->get();
    return view('admin/home/home',compact('stok_produk'));
});

Route::get('/cetakpdf', function () {
    return view('admin/home/cetakpdf');
});

Route::get('/index',[UserController::class,'indexPage']);
Route::get('beli/{id}',[UserController::class,'beliPage']);
Route::get('about',[UserController::class,'aboutPage']);
Route::get('blog_list',[UserController::class,'blog_listPage']);
Route::get('contact',[UserController::class,'contactPage']);
Route::get('ourstory',[UserController::class,'ourstoryPage']);
Route::get('product',[UserController::class,'productPage']);

Route::resource('admin/produklist', 'App\Http\Controllers\Admin\produklistController');
Route::resource('admin/pengguna', 'App\Http\Controllers\Admin\penggunaController');
Route::resource('admin/pesanan', 'App\Http\Controllers\Admin\pesananController');
Route::resource('admin/stokproduk', 'App\Http\Controllers\Admin\stokprodukController');
Route::resource('admin/invoice', 'App\Http\Controllers\Admin\invoiceController');
Route::get('admin/invoice/cetak_pdf', 'App\Http\Controllers\Admin\invoiceController@cetak_pdf');
Route::resource('admin/stok', 'App\Http\Controllers\Admin\stokController');
Route::resource('admin/stok', 'App\Http\Controllers\Admin\stokController');
Route::resource('admin/stokproduk', 'App\Http\Controllers\Admin\stokprodukController');
Route::resource('admin/stok', 'App\Http\Controllers\Admin\stokController');
Route::get('admin/home/home', 'App\Http\Controllers\vstokController@home');
Route::get('admin/home/cetak_pdf', 'App\Http\Controllers\Admin\vstokController@cetak_pdf');