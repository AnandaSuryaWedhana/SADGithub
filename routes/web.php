<?php

use App\Http\Controllers\entryoperator;
use App\Http\Controllers\entrypembeli;
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
Route::get('/updatepembeli', function () {
    return view('updatepembeli',[
        "title" => "updatepembeli"
    ]);
});
Route::get('/header', function () {
    return view('header',[
        "title" => "header"
    ]);
});
Route::get('/updatedeletepembeli',function(){
return view('updatedeletepembeli',[
"title" => "updatedeletepembeli"
    ]);
});
Route::get('/updatedeleteoperator',function(){
    return view('updatedeleteoperator',[
        "title" => "updatedeleteoperator"
    ]);
});
Route::get('/updateoperator',function(){
    return view('updateoperator',[
        "title" => "updateoperator"
    ]);
});
Route::get('/laporantransaksi',function(){
    return view('laporantransaksi',[
        "title" => "laporantransaksi"
    ]);
});
Route::get('/laporanproduklaris',function(){
    return view('laporanproduklaris',[
        "title" => "laporanproduklaris"
    ]);
});
Route::get('/portofolioprodukmarketing',function(){
    return view('portofolioprodukmarketing',[
        "title" => "portofolioprodukmarketing"
    ]);
});
Route::get('/detailportofolioprodukmarketing',function(){
    return view('detailportofolioprodukmarketing',[
        "title" => "detailportofolioprodukmarketing"
    ]);
});
Route::get('/updatedeletekategori',function(){
    return view('updatedeletekategori',[
        "title" => "updatedeletekategori"
    ]);
});
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
Route::get('/updatedeletetransaksi',function(){
    return view('updatedeletetransaksi',[
        "title" => "updatedeletetransaksi"
    ]);
});
Route::get('/updatedeletekategori',function(){
    return view('updatedeletekategori',[
        "title" => "updatedeletekategori"
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
