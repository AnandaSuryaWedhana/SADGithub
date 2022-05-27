<?php

namespace App\Http\Controllers;

use App\Models\modellaporantransaksi;
use Illuminate\Http\Request;


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
            'list' => modellaporantransaksi::sortable()->join('PEMBELI','PEMBELI.ID_PEMBELI','=','DEAL_TRANSAKSI.ID_PEMBELI')->select('DEAL_TRANSAKSI.ID_TRANSAKSI','DEAL_TRANSAKSI.ID_PEMBELI','PEMBELI.NAMA_PEMBELI', 'DEAL_TRANSAKSI.TANGGAL_TRANSAKSI','DEAL_TRANSAKSI.JUMLAHPRODUK_TRANSAKSI','DEAL_TRANSAKSI.TOTAL_TRANSAKSI','DEAL_TRANSAKSI.PEMBAYARAN_DITERIMA','DEAL_TRANSAKSI.STATUS_DEALTRANSAKSI')->paginate(10)
        ];
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
