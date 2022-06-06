<?php

namespace App\Http\Controllers;

use App\Models\modelupdatedeletekategori;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class updatedeletekategori extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {


        $data = [
            'list' => DB::table('KATEGORI')->get()
        ];
        return view('updatedeletekategori',[
            'title'=>'updatedeletekategori'
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
        $transaksi = DB::select('select * from KATEGORI where ID_KATEGORI = ?', [$id]);
        return view('updatekategori',[
            'title'=>'updatekategori',
            'data'=>$transaksi
        ]);
    }
    public function deletetransaksi($id)
    {
        DB::delete('delete from KATEGORI where ID_KATEGORI = ?', [$id]);
        return redirect('updatedeletekategori')->with('success','Data Terhapus');
    }
    public function updatekategori(Request $request,$id){
        $request->validate([
            'NamaKategori' => 'required|regex:/^[a-zA-Z ]*$/|max:100|min:11',
            'DeskripsiKategori' =>'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/|min:5'
        ]);
        $nama_kategori = $request->input('NamaKategori');
        $deskripsi_kategori = $request->input('DeskripsiKategori');
        DB::update('update KATEGORI set NAMA_KATEGORI = ?, DESKRIPSI_KATEGORI = ?  where ID_TRANSAKSI= ?', [$nama_kategori,$deskripsi_kategori,$id]);
        return redirect('updatedeletekategori')->with('successupdate','Data Berhasil Diupdate!');
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
