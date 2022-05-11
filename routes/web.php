<?php

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
Route::get('/entryoperator', function () {
    return view('entryoperator',[
        "title" => "Entry operator"
    ]);
});
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
