<?php

use App\Http\Controllers\entryoperator;
use App\Http\Controllers\entrypembeli;
use App\Http\Controllers\laporanproduklaris;
use App\Http\Controllers\laporantransaksi;
use App\Http\Controllers\portofolioprodukmarketing;
use App\Http\Controllers\updatedeletekategori;
use App\Http\Controllers\updatedeleteoperator;
use App\Http\Controllers\updatedeletepembeli;
use App\Http\Controllers\updatedeletetransaksi;
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
    return view('entryoperator',[
        "title" => "Entry operator"
    ]);
});
Route::get('entrypembeli',[entrypembeli::class,'index']);
Route::post('/entrypembeli',[entrypembeli::class,'store']);
Route::get('/entryoperator',[entryoperator::class,'index']);
Route::post('/entryoperator',[entryoperator::class,'store']);
Route::get('/editpembeli/{id}',[updatedeletepembeli::class,'show']);
Route::get('/deletepembeli/{id}',[updatedeletepembeli::class,'deletepembeli']);
Route::post('/updatepembeli/{id}',[updatedeletepembeli::class,'updatepembeli']);
Route::get('/edittransaksi/{id}',[updatedeletetransaksi::class,'show']);
Route::get('/deletetransaksi/{id}',[updatedeletetransaksi::class,'deletetransaksi']);
Route::post('/updatetransaksi/{id}',[updatedeletetransaksi::class,'updatetransaksi']);
Route::get('/updatedeletetransaksi',[updatedeletetransaksi::class,'index']);
// Route::get('/updatedeletetransaksi', function () {
//     return view('updatedeletetransaksi',[
//         "title" => "updatedeletetransaksi"
//     ]);
// });
// Route::get('/updatedeletetransaksi',[upddeltransaksi::class,'index']);
Route::get('/header', function () {
    return view('header',[
        "title" => "header"
    ]);
});
Route::get('/updatedeletepembeli',[updatedeletepembeli::class,'index']);
Route::get('/updatedeleteoperator',[updatedeleteoperator::class,'index']);
Route::get('/editoperator/{id}',[updatedeleteoperator::class,'show']);
Route::get('/deleteoperator/{id}',[updatedeleteoperator::class,'deleteoperator']);
Route::post('/updateoperator/{id}',[updatedeleteoperator::class,'updateoperator']);
Route::get('/laporantransaksi',function(){
    return view('laporantransaksi',[
        "title" => "laporantransaksi"
    ]);
});
Route::get('/laporanproduklaris',[laporanproduklaris::class,'index']);
Route::get('/portofolioprodukmarketing',[portofolioprodukmarketing::class,'index']);
Route::get('/portofolioprodukmarketing/nakas',[portofolioprodukmarketing::class,'displaynakas']);
Route::get('/portofolioprodukmarketing/dipan',[portofolioprodukmarketing::class,'displaydipan']);
Route::get('/portofolioprodukmarketing/kitchenset',[portofolioprodukmarketing::class,'displaykitchenset']);
Route::get('/portofolioprodukmarketing/mejabelajar',[portofolioprodukmarketing::class,'displaymejabelajar']);
Route::get('/portofolioprodukmarketing/lemari',[portofolioprodukmarketing::class,'displaylemari']);
Route::get('/portofolioprodukmarketing/displaytv',[portofolioprodukmarketing::class,'displaydisplaytv']);
Route::get('/portofolioprodukmarketing/mejarias',[portofolioprodukmarketing::class,'displaymejarias']);
Route::get('/detailportofolioprodukmarketing/{id}',[portofolioprodukmarketing::class,'show']);
Route::get('/laporantransaksi',[laporantransaksi::class,'index']);
Route::get('/detailportofolioprodukmarketing',function(){
    return view('detailportofolioprodukmarketing',[
        "title" => "detailportofolioprodukmarketing"
    ]);
});
Route::get('/updatedeletekategori',[updatedeletekategori::class,'index']);
Route::get('/updatedeleteproduk',function(){
    return view('updatedeleteproduk',[
        "title" => "updatedeleteproduk"
    ]);
});
Route::get('/entryproduk',function(){
    return view('entryproduk',[
        "title" => "entryproduk"
    ]);
});
Route::get('/entrytransaksi',function(){
    return view('entrytransaksi',[
        "title" => "entrytransaksi"
    ]);
});
Route::get('/entrykategori',function(){
    return view('entrykategori',[
        "title" => "entrykategori"
    ]);
});
Route::get('/updatekategori',function(){
    return view('updatekategori',[
        "title" => "updatekategori"
    ]);
});
Route::get('/updateproduk',function(){
    return view('updateproduk',[
        "title" => "updateproduk"
    ]);
});
Route::get('/updatetransaksi',function(){
    return view('updatetransaksi',[
        "title" => "updatetransaksi"
    ]);
});
Route::get('/login',function(){
    return view('login',[
        "title" => "login"
    ]);
});
