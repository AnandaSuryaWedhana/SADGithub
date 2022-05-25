<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class portofolioprodukmarketing extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $name = 'PRODUK';
        $data = [
            'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->paginate(8)
        ];
        return view('portofolioprodukmarketing',[
            'title' => 'portofolioprodukmarketing',
            'photo' => '\photo\nakasphoto.jpg'
        ],$data)->with(['name'=>$name]);
    }
    public function displaynakas(){
        $name = 'NAKAS';
        $data = [
            'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->where('ID_KATEGORI','=','KP004')->paginate(8)
        ];
        return view('portofolioprodukmarketing',[
            'title' => 'portofolioprodukmarketing',
            'photo' => '\photo\nakasphoto.jpg'
        ],$data)->with(['name'=>$name]);
    }
    public function displaydipan(){
        $name = 'DIPAN';
        $data = [
            'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->where('ID_KATEGORI','=','KP003')->paginate(8)
        ];
        return view('portofolioprodukmarketing',[
            'title' => 'portofolioprodukmarketing',
            'photo' => '\photo\nakasphoto.jpg'
        ],$data)->with(['name'=>$name]);
    }
    public function displaykitchenset(){
        $name = 'KITCHEN SET';
        $data = [
            'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->where('ID_KATEGORI','=','KP001')->paginate(8)
        ];
        return view('portofolioprodukmarketing',[
            'title' => 'portofolioprodukmarketing',
            'photo' => '\photo\nakasphoto.jpg'
        ],$data)->with(['name'=>$name]);
    }
    public function displaymejabelajar(){
        $name = 'MEJA BELAJAR';
        $data = [
            'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->where('ID_KATEGORI','=','KP007')->paginate(8)
        ];
        return view('portofolioprodukmarketing',[
            'title' => 'portofolioprodukmarketing',
            'photo' => '\photo\nakasphoto.jpg'
        ],$data)->with(['name'=>$name]);
    }
    public function displaylemari(){
        $name = 'LEMARI';
        $data = [
            'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->where('ID_KATEGORI','=','KP002')->paginate(8)
        ];
        return view('portofolioprodukmarketing',[
            'title' => 'portofolioprodukmarketing',
            'photo' => '\photo\nakasphoto.jpg'
        ],$data)->with(['name'=>$name]);
    }
    public function displaydisplaytv(){
        $name = 'DISPLAY TV';
        $data = [
            'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->where('ID_KATEGORI','=','KP005')->paginate(8)
        ];
        return view('portofolioprodukmarketing',[
            'title' => 'portofolioprodukmarketing',
            'photo' => '\photo\nakasphoto.jpg'
        ],$data)->with(['name'=>$name]);
    }
    public function displaymejarias(){
        $name = 'MEJA RIAS';
        $data = [
            'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->where('ID_KATEGORI','=','KP006')->paginate(8)
        ];
        return view('portofolioprodukmarketing',[
            'title' => 'portofolioprodukmarketing',
            'photo' => '\photo\nakasphoto.jpg'
        ],$data)->with(['name'=>$name]);
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
        $produk = DB::select('select * from PRODUK where ID_PRODUK = ?', [$id]);
        return view('detailportofolioprodukmarketing',[
            'title'=>'detailportofolioprodukmarketing',
            'data'=>$produk,
            'photo' => '\photo\nakasphoto.jpg'
        ]);
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
