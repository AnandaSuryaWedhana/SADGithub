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
            'Password' => 'required|min:8'
        ]);
        // generate id
        $username = $request->input('Username');
        $substrdata = substr($username,0,1);
        $substrdata = strtoupper($substrdata);
        $count = DB::table('USER')
        ->where('ID_USER', 'like', '%U'. $substrdata .'%')
        ->latest('ID_USER')
        ->count();
        // if 0
        if($count == 0){
            $idoperator = "U". $substrdata . "001";
            return $idoperator;
        }
        if($count > 0){
            $lastid = DB::table('USER')
            ->where('ID_USER', 'like', '%U'. $substrdata .'%')
            ->latest('ID_USER')
            ->first('ID_USER');
            $arrayvalue = get_object_vars($lastid);
        }
        //$array = get_object_vars($last);
        //$subdata = substr($array['ID_USER'], -1);
        // $int = (int)$subdata;
        // dd($int+1);
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
