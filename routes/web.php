<?php

use App\Http\Controllers\entryoperator;
use App\Http\Controllers\entrypembeli;
use App\Http\Controllers\entrykategori;
use App\Http\Controllers\entryproduk;
use App\Http\Controllers\entrytransaksi;
use App\Http\Controllers\laporanproduklaris;
use App\Http\Controllers\cobatransaksi;
use App\Http\Controllers\laporantransaksi;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\portofolioprodukmarketing;
use App\Http\Controllers\updatedeletekategori;
use App\Http\Controllers\updatedeleteoperator;
use App\Http\Controllers\updatedeletepembeli;
use App\Http\Controllers\updatedeletetransaksi;
use App\Http\Controllers\updatedeleteproduk;
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

Route::get('entrypembeli',[entrypembeli::class,'index']);
Route::post('/addpembeli',[entrypembeli::class,'store']);
Route::get('entrykategori',[entrykategori::class,'index']);
Route::post('/entrykategori',[entrykategori::class,'store']);
Route::get('entryproduk',[entryproduk::class,'index']);
Route::post('/entryproduk',[entryproduk::class,'store']);
Route::get('/entryoperator',[entryoperator::class,'index']);
Route::post('/entryoperator',[entryoperator::class,'store']);
Route::get('/entrytransaksi',[entrytransaksi::class,'index']);
Route::get('/entrytransaksi/{id}',[entrytransaksi::class,'inserttransaksi']);
Route::get('/halamantransaksiproduk/{id}/{idtransaksi}',[entrytransaksi::class,'halamaninsert']);
Route::get('/masuklagi/{id}/{idtransaksi}',[entrytransaksi::class,'addagain']);
Route::get('/editpembeli/{id}',[updatedeletepembeli::class,'show']);
Route::get('/deletepembeli/{id}',[updatedeletepembeli::class,'deletepembeli']);
Route::post('/updatepembeli/{id}',[updatedeletepembeli::class,'updatepembeli']);
Route::get('/edittransaksi/{id}',[updatedeletetransaksi::class,'show']);
Route::get('/deletetransaksi/{id}',[updatedeletetransaksi::class,'deletetransaksi']);
Route::post('/updatetransaksi/{id}',[updatedeletetransaksi::class,'updatetransaksi']);
Route::get('/updatedeletetransaksi',[updatedeletetransaksi::class,'index']);
Route::get('/editproduk/{id}',[updatedeleteproduk::class,'show']);
Route::get('/deleteproduk/{id}',[updatedeleteproduk::class,'deleteproduk']);
Route::post('/updateproduk/{id}',[updatedeleteproduk::class,'updateproduk']);
Route::get('/updatedeleteproduk',[updatedeleteproduk::class,'index']);
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
Route::get('/portofolioprodukmarketinglainnya/nakas',[portofolioprodukmarketing::class,'displaynakas']);
Route::get('/portofolioprodukmarketinglainnya/dipan',[portofolioprodukmarketing::class,'displaydipan']);
Route::get('/portofolioprodukmarketinglainnya/kitchenset',[portofolioprodukmarketing::class,'displaykitchenset']);
Route::get('/portofolioprodukmarketinglainnya/mejabelajar',[portofolioprodukmarketing::class,'displaymejabelajar']);
Route::get('/portofolioprodukmarketinglainnya/lemari',[portofolioprodukmarketing::class,'displaylemari']);
Route::get('/portofolioprodukmarketinglainnya/displaytv',[portofolioprodukmarketing::class,'displaydisplaytv']);
Route::get('/portofolioprodukmarketinglainnya/mejarias',[portofolioprodukmarketing::class,'displaymejarias']);
Route::get('/portofolioprodukmarketinglainnya/cermin',[portofolioprodukmarketing::class,'displaycermin']);
Route::get('/detailportofolioprodukmarketing/{id}',[portofolioprodukmarketing::class,'show']);
Route::get('/laporantransaksi',[laporantransaksi::class,'index']);
Route::get('/detailportofolioprodukmarketing',function(){
    return view('detailportofolioprodukmarketing',[
        "title" => "detailportofolioprodukmarketing"
    ]);
});
Route::get('/updatedeletekategori',[updatedeletekategori::class,'index']);
Route::get('/editkategori/{id}',[updatedeletekategori::class,'show']);
Route::get('/deletekategori/{id}',[updatedeletekategori::class,'deletekategori']);
Route::post('/updatekategori/{id}',[updatedeletekategori::class,'updatekategori']);
Route::get('cobatransaksi',[cobatransaksi::class,'index']);
Route::post('cobatransaksi',[cobatransaksi::class,'show']);
// Route::post('/halamantransaksiproduk/{id}',[halamantransaksiproduk::class,'show']);
// Route::get('/updatedeleteproduk',function(){
//     return view('updatedeleteproduk',[
//         "title" => "updatedeleteproduk"
//     ]);
// });
// Route::get('/entryproduk',function(){
//     return view('entryproduk',[
//         "title" => "entryproduk"
//     ]);
// });
// Route::get('/entrytransaksi',function(){
//     return view('entrytransaksi',[
//         "title" => "entrytransaksi"
//     ]);
// });
// Route::get('/updateproduk',function(){
//     return view('updateproduk',[
//         "title" => "updateproduk"
//     ]);
// });
// Route::get('/updatetransaksi',function(){
//     return view('updatetransaksi',[
//         "title" => "updatetransaksi"
//     ]);
// });
Route::get('/',[logincontroller::class,'index']);
Route::post('/loginuser',[logincontroller::class,'loginfunction']);
Route::get('/loginuser',[logincontroller::class,'loginfunction']);
Route::get('filterdata',[laporantransaksi::class,'filterdata']);
