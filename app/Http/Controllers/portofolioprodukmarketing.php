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
    public function index(Request $request)
    {
        $name = 'PRODUK';
        $searhproduct = $request->input('cariproduk');
        if(!empty($searhproduct)){
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->paginate(8)
            ];
        }
        else{
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->paginate(8)
            ];
        }
        return view('portofolioprodukmarketing',[
            'title' => 'portofolioprodukmarketing'
        ],$data)->with(['name'=>$name]);
    }
    public function displaynakas(Request $request){
        $name = 'NAKAS';
        $searhproduct = $request->input('cariproduk');
        if(!empty($searhproduct)){
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->where('ID_KATEGORI','=','KP004')->paginate(8)
            ];
        }
        else{
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('ID_KATEGORI','=','KP004')->paginate(8)
            ];
        }
        return view('portofolioprodukmarketinglainnya',[
            'title' => 'portofolioprodukmarketinglainnya'
        ],$data)->with(['name'=>$name]);
    }
    public function displaydipan(Request $request){
        $name = 'DIPAN';
        $searhproduct = $request->input('cariproduk');
        if(!empty($searhproduct)){
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->where('ID_KATEGORI','=','KP003')->paginate(8)
            ];
        }
        else{
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('ID_KATEGORI','=','KP003')->paginate(8)
            ];
        }
        return view('portofolioprodukmarketinglainnya',[
            'title' => 'portofolioprodukmarketinglainnya'
        ],$data)->with(['name'=>$name]);
    }
    public function displaykitchenset(Request $request){
        $name = 'KITCHEN SET';
        $searhproduct = $request->input('cariproduk');
        if(!empty($searhproduct)){
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->where('ID_KATEGORI','=','KP001')->paginate(8)
            ];
        }
        else{
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('ID_KATEGORI','=','KP001')->paginate(8)
            ];
        }
        return view('portofolioprodukmarketinglainnya',[
            'title' => 'portofolioprodukmarketinglainnya'
        ],$data)->with(['name'=>$name]);
    }
    public function displaymejabelajar(Request $request){
        $name = 'MEJA BELAJAR';
        $searhproduct = $request->input('cariproduk');
        if(!empty($searhproduct)){
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->where('ID_KATEGORI','=','KP007')->paginate(8)
            ];
        }
        else{
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('ID_KATEGORI','=','KP007')->paginate(8)
            ];
        }
        return view('portofolioprodukmarketinglainnya',[
            'title' => 'portofolioprodukmarketinglainnya'
        ],$data)->with(['name'=>$name]);
    }
    public function displaylemari(Request $request){
        $name = 'LEMARI';
        $searhproduct = $request->input('cariproduk');
        if(!empty($searhproduct)){
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->where('ID_KATEGORI','=','KP002')->paginate(8)
            ];
        }
        else{
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('ID_KATEGORI','=','KP002')->paginate(8)
            ];
        }
        return view('portofolioprodukmarketinglainnya',[
            'title' => 'portofolioprodukmarketinglainnya'
        ],$data)->with(['name'=>$name]);
    }
    public function displaydisplaytv(Request $request){
        $name = 'DISPLAY TV';
        $searhproduct = $request->input('cariproduk');
        if(!empty($searhproduct)){
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->where('ID_KATEGORI','=','KP005')->paginate(8)
            ];
        }
        else{
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('ID_KATEGORI','=','KP005')->paginate(8)
            ];
        }
        return view('portofolioprodukmarketinglainnya',[
            'title' => 'portofolioprodukmarketinglainnya'
        ],$data)->with(['name'=>$name]);
    }
    public function displaymejarias(Request $request){
        $name = 'MEJA RIAS';
        $searhproduct = $request->input('cariproduk');
        if(!empty($searhproduct)){
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->where('ID_KATEGORI','=','KP006')->paginate(8)
            ];
        }
        else{
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('ID_KATEGORI','=','KP006')->paginate(8)
            ];
        }
        return view('portofolioprodukmarketinglainnya',[
            'title' => 'portofolioprodukmarketinglainnya'
        ],$data)->with(['name'=>$name]);
    }
    public function displaycermin(Request $request){
        $name = 'CERMIN';
        $searhproduct = $request->input('cariproduk');
        if(!empty($searhproduct)){
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->where('ID_KATEGORI','=','KC001')->paginate(8)
            ];
        }
        else{
            $data = [
                'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK','FOTO_PRODUK')->where('ID_KATEGORI','=','KC001')->paginate(8)
            ];
        }
        return view('portofolioprodukmarketinglainnya',[
            'title' => 'portofolioprodukmarketinglainnya'
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
            'data'=>$produk
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
