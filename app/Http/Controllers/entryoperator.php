<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class entryoperator extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('entryoperator',[
            "title" => "Entry operator"
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
            'Username' => 'required',
            'Password' => 'required|min:3'
        ]);
        $username = $request->input('Username');
        $availableuser = DB::table('USER')
        ->where('USERNAME', '=', $username)
        ->count();
        // check data availability
        if($availableuser == 0){
            // generate id
            $substrdata = substr($username,0,1);
            $substrdata = strtoupper($substrdata);
            $count = DB::table('USER')
            ->where('ID_USER', 'like', '%U'. $substrdata .'%')
            ->latest('ID_USER')
            ->count();
            if($count == 0){
                $idoperator = "U". $substrdata . "001";
            }
            if($count > 0){
                $lastid = DB::table('USER')
                ->where('ID_USER', 'like', '%U'. $substrdata .'%')
                ->latest('ID_USER')
                ->first('ID_USER');
                $arrayvalue = get_object_vars($lastid);
                $substrid = substr($arrayvalue['ID_USER'], -1);
                $int = (int)$substrid+1;
                $intlen = strlen((string)$int);
                if($intlen > 0 and $intlen <9){
                    $idoperator = "U". $substrdata . "00". (string)$int;
                }
                if($intlen > 9 and $intlen <100){
                    $idoperator = "U". $substrdata . "0". (string)$int;
                }
            }
            // insert data
            $query = DB::table('USER')->insert([
                'ID_USER' => $idoperator,
                'USERNAME' => $request->input('Username'),
                'PASSWORD' => $request->input('Password'),
                'ROLE' => $request->input('role'),
                'DEL_USER' => 0
            ]);
            return back()->with('success','Operator Berhasil Dimasukkan');
        }
        else{
            return back()->with('fail','Username Telah Digunakan');
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
