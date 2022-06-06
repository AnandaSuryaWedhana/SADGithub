<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class entrykategori extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entrykategori',[
            "title" => "entrykategori"
        ]);
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
        // validate
        $request->validate([
            'NamaKategori' => 'required|regex:/^[a-zA-Z ]*$/|max:100|min:3',
            'DeskripsiKategori' =>'required|regex:/(^[-0-9A-Za-z.,\/ ]+$)/|min:5'
        ]);
        $categoryname = $request->input('NamaKategori');
        $descriptioncategory = $request->input('DeskripsiKategori');
        $availableuser = DB::table('KATEGORI')
        ->where('NAMA_KATEGORI', '=', $categoryname)
        ->count();
        // check data availability
        if($availableuser == 0){
            // generate id
             $substrdata = substr($categoryname,0,1);
             $substrdata = strtoupper($substrdata);
             $count = DB::table('KATEGORI')
             ->where('ID_KATEGORI', 'like', '%KP'.'%')
             ->latest('ID_KATEGORI')
             ->count();
             if($count == 0){
                 $idcategory = "KP". "001";
             }
             if($count > 0){
                 $lastid = DB::table('KATEGORI')
                 ->where('ID_KATEGORI', 'like', '%KP'.'%')
                 ->latest('ID_KATEGORI')
                 ->first('ID_KATEGORI');
                 $arrayvalue = get_object_vars($lastid);
                 $substrid = substr($arrayvalue['ID_KATEGORI'], -1);
                 $int = (int)$substrid+1;
                 $intlen = strlen((string)$int);
                 if($intlen > 0 and $intlen <9){
                     $idcategory = "KP". "00". (string)$int;
                 }
                 if($intlen > 9 and $intlen <100){
                     $idcategory = "KP"."0". (string)$int;
                 }
             }
             // insert data
              $query = DB::table('KATEGORI')->insert([
                  'ID_KATEGORI' => $idcategory,
                  'NAMA_KATEGORI' => $request->input('NamaKategori'),
                  'DESKRIPSI_KATEGORI' => $request->input('DeskripsiKategori'),
                  'DEL_KATEGORI' => 0
              ]);
            return back()->with('success','Kategori Berhasil Dimasukkan');
        }
         else{
             return back()->with('fail','Kategori Sudah Tersedia');
         }
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
