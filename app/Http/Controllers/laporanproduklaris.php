<?php

namespace App\Http\Controllers;

use App\Models\modellaporanproduklaris;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class laporanproduklaris extends Controller
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
        //     $data = ['listdata' => modellaporanproduklaris::join('KATEGORI', 'PRODUK.ID_KATEGORI', '=', 'KATEGORI.ID_KATEGORI')
        //     ->select('PRODUK.ID_PRODUK', 'KATEGORI.NAMA_KATEGORI', 'PRODUK.NAMA_PRODUK', 'PRODUK.DESKRIPSI_PRODUK', 'PRODUK.HARGA_PRODUK', 'JUMLAHPRODUK_TRANSAKSI')
        //     ->where('PRODUK.NAMA_PRODUK','like','%' . $searcheddata . '%')
        //     ->orWhere('KATEGORI.NAMA_KATEGORI','like','%' . $searcheddata . '%')
        //     ->orWhere('PRODUK.ID_PRODUK','like','%' . $searcheddata . '%')
        //     ->orderBy('JUMLAHPRODUK_TRANSAKSI', 'desc')
        //     ->paginate(10)];
        // }
        // else{
            $data = [
                'list'=>DB::table('PRODUK')->join('KATEGORI', 'PRODUK.ID_KATEGORI', '=', 'KATEGORI.ID_KATEGORI')
                ->select('NAMA_PRODUK','ID_PRODUK','NAMA_KATEGORI','DESKRIPSI_PRODUK','HARGA_PRODUK','JUMLAHPRODUK_TRANSAKSI')->get()
            ];
        // }
        return view('laporanproduklaris',[
            'title' => 'laporanproduklaris'
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
