<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class upddeltransaksi extends Controller
{
    public function index(){
        return view('updatedeletetransaksi');
    }
}
