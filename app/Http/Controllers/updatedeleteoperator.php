<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\updatedeleteoperatormodel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;

class updatedeleteoperator extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = array('list'=>DB::table('USER')->get());
        return view('updatedeleteoperator',[
            'title' => 'updatedeleteoperator'
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
        $user = DB::select('select * from USER where ID_USER = ?', [$id]);
        return view('updateoperator',[
            'title'=>'updateoperator',
            'data'=>$user
        ]);
    }
    public function deleteoperator($id){
        DB::delete('delete from USER where ID_USER = ?', [$id]);
        return redirect('updatedeleteoperator')->with('success','Data Terhapus');
    }
    public function updateoperator(Request $request,$id){
        $request->validate([
            'Username' => 'required',
            'Password' => 'required|min:3'
        ]);
        $user_username = $request->input('Username');
        $user_password = $request->input('Password');
        DB::update('update USER set USERNAME = ?, PASSWORD = ? where ID_USER = ?', [$user_username,$user_password,$id]);
        return redirect('updatedeleteoperator')->with('successupdate','Data Berhasil Diupdate!');
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
