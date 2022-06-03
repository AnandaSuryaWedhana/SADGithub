<?php

namespace App\Http\Controllers;

use App\Models\modelupdatedeletepembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class updatedeletepembeli extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // $searcheddata = $request->input('searchside');
        // $searcheddata = Str::lower($searcheddata);
        // if(!empty($searcheddata)){
        //     $data = [
        //         // 'listdata' => laporanproduk::sortable()->join('KATEGORI', 'PRODUK.ID_KATEGORI', '=', 'KATEGORI.ID_KATEGORI')
        //         // ->select('PRODUK.ID_PRODUK', 'KATEGORI.NAMA_KATEGORI', 'PRODUK.NAMA_PRODUK', 'PRODUK.DESKRIPSI_PRODUK', 'PRODUK.HARGA_PRODUK', 'JUMLAHPRODUK_TRANSAKSI')
        //         // ->where('PRODUK.NAMA_PRODUK','like','%' . $searcheddata . '%')
        //         // ->orWhere('KATEGORI.NAMA_KATEGORI','like','%' . $searcheddata . '%')
        //         // ->orWhere('PRODUK.ID_PRODUK','like','%' . $searcheddata . '%')
        //         // ->orderBy('JUMLAHPRODUK_TRANSAKSI', 'desc')
        //         // ->paginate(10)
        //         'list' => modelupdatedeletepembeli::sortable()->where('NAMA_PEMBELI', 'like', '%' . $searcheddata . '%')
        //         ->orWhere('ID_PEMBELI', 'like', '%' . $searcheddata . '%')
        //         ->paginate(10)
        //     ];
        // }
        // else{
            $data = [
                'list' => DB::table('PEMBELI')->get()
             ];
        // }
        return view('updatedeletepembeli',[
            'title'=>'updatedeletepembeli'
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
        $customer = DB::select('select * from PEMBELI where ID_PEMBELI = ?', [$id]);
        return view('updatepembeli',[
            'title'=>'updatepembeli',
            'data'=>$customer
        ]);
    }
    public function deletepembeli($id)
    {
        DB::delete('delete from PEMBELI where ID_PEMBELI = ?', [$id]);
        return redirect('updatedeletepembeli')->with('success','Data Terhapus');
    }
    public function updatepembeli(Request $request,$id){
        $request->validate([
            'Nama' => 'required|regex:/^[a-zA-Z ]*$/|max:100|min:3',
            'Alamat' =>'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/|min:5',
            'NomorTelepon' => 'required|regex:/(0)[0-9]{11}/',
            'JumlahTransaksi' => 'required|numeric|gt:0'
        ]);
        $pembeli_nama = $request->input('Nama');
        $pembeli_alamat = $request->input('Alamat');
        $pembeli_nomortelepon = $request->input('NomorTelepon');
        $pembeli_transaksi = $request->input('JumlahTransaksi');
        DB::update('update PEMBELI set NAMA_PEMBELI = ?, ALAMAT_PEMBELI = ?,  TELPHONE_PEMBELI = ?, JUMLAHPRODUK_TRANSAKSI = ? where ID_PEMBELI = ?', [$pembeli_nama,$pembeli_alamat,$pembeli_nomortelepon,$pembeli_transaksi,$id]);
        return redirect('updatedeletepembeli')->with('successupdate','Data Berhasil Diupdate!');
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
