<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class logincontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login');
    }
    public function loginfunction(Request $request)
    {
        $usernameinput = $request->input('username');
        $passwordinput = $request->input('password');
        $count = DB::table('USER')
             ->where('USERNAME', '=', $usernameinput)
             ->where('PASSWORD','=',$passwordinput)
             ->count();
        if($count == 0){
            return back()->with('fail','Username atau Password yang dimasukkan salah');
        }
        else{
            $checkroleuser = DB::table('USER')->select('ROLE')->where('USERNAME','=',$usernameinput)->where('PASSWORD','=',$passwordinput)->first();
            $checkroleuser = get_object_vars($checkroleuser);
            if(strtolower($checkroleuser['ROLE']) == 'marketing'){
                $name = 'PRODUK';
                $searhproduct = $request->input('cariproduk');
                if(!empty($searhproduct)){
                    $data = [
                        'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->where('NAMA_PRODUK','like','%' . $searhproduct . '%')->paginate(8)
                    ];
                }
                else{
                    $data = [
                        'list' => DB::table('PRODUK')->select('ID_PRODUK','NAMA_PRODUK','DESKRIPSI_PRODUK')->paginate(8)
                    ];
                }
                return view('portofolioprodukmarketing',[
                    'title' => 'portofolioprodukmarketing',
                    'photo' => '\photo\nakasphoto.jpg'
                ],$data)->with(['name'=>$name]);
            }
            else{
                $request->session()->put('user',$usernameinput);
                return view('entrypembeli',[
                    "title" => "entrypembeli",
                ]);
            }
        }
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
