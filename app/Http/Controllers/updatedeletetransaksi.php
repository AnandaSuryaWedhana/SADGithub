<?php

namespace App\Http\Controllers;

use App\Models\modelupdatedeletetransaksi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class updatedeletetransaksi extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $data = [
            'list' => DB::table('DEAL_TRANSAKSI')->get()
        ];
        return view('updatedeletetransaksi',[
            'title'=>'updatedeletetransaksi'
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
        $transaksi = DB::select('select * from DEAL_TRANSAKSI where ID_TRANSAKSI = ?', [$id]);
        return view('updatetransaksi',[
            'title'=>'updatetransaksi',
            'data'=>$transaksi
        ]);
    }
    public function deletetransaksi($id)
    {
        DB::delete('delete from DEAL_TRANSAKSI where ID_TRANSAKSI = ?', [$id]);
        return redirect('updatedeletetransaksi')->with('success','Data Terhapus');
    }
    public function updatetransaksi(Request $request,$id){
        $request->validate([
         'Tanggal' => 'required|',
         'TotalProduk' =>'required|',
         'TotalTransaksi' => 'required|',
         'PembayaranDiterima' => 'required|',
        'StatusPembayaran' => 'required|'
        ]);
        $tanggal_transaksi = $request->input('Tanggal' );
        $jumlah_transaksi = $request->input('TotalProduk');
        $total_transaksi = $request->input('TotalTransaksi');
        $pembayaran_diterima = $request->input('PembayaranDiterima');
        $status_pembayaran = $request->input('StatusPembayaran');
        DB::update('update DEAL_TRANSAKSI set TANGGAL_TRANSAKSI = ?, JUMLAHPRODUK_TRANSAKSI = ?,  TOTAL_TRANSAKSI = ?, PEMBAYARAN_DITERIMA = ?, STATUS_DEALTRANSAKSI = ? where ID_TRANSAKSI= ?', [$tanggal_transaksi,$jumlah_transaksi,$total_transaksi,$pembayaran_diterima,$status_pembayaran,$id]);
        return redirect('updatedeletetransaksi')->with('successupdate','Data Berhasil Diupdate!');
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
