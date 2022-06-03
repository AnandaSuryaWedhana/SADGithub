<?php

namespace App\Http\Controllers;

use App\Models\DEAL_TRANSAKSI;
use App\Models\modellaporantransaksi;
use App\Models\modelpembeli;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;
use Illuminate\support\Facades\DB;

class laporantransaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $data = [
             'list' => DB::table('DEAL_TRANSAKSI')->join('PEMBELI','DEAL_TRANSAKSI.ID_PEMBELI','=','PEMBELI.ID_PEMBELI')->select('ID_TRANSAKSI','NAMA_PEMBELI','PEMBELI.ID_PEMBELI','TANGGAL_TRANSAKSI','DEAL_TRANSAKSI.JUMLAHPRODUK_TRANSAKSI','TOTAL_TRANSAKSI','PEMBAYARAN_DITERIMA','STATUS_DEALTRANSAKSI')->get()
            ];
        // $data = modelpembeli::where('ID_PEMBELI','CA0001');
        // $data->transaksi()->get();
        //     dd('$data');
        return view('laporantransaksi',[
            'title' => 'laporantransaksi'
        ],$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
