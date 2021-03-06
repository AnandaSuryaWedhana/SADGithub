<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\updatedeleteoperatormodel;
use Illuminate\Support\Arr;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use PhpParser\Node\Stmt\Else_;

class updatedeleteoperator extends Controller
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
        //     $data = array('list'=>DB::table('USER')
        //     ->where('ID_USER','like','%' . $searcheddata . '%')
        //     ->orWhere('USERNAME','like','%' . $searcheddata . '%')
        //     ->orWhere('ROLE','like','%' . $searcheddata . '%')
        //     ->paginate(10));
        // }
        // else{
            $data = array('list'=>DB::table('USER')->paginate(10));
        // }
        return view('updatedeleteoperator',[
            'title' => 'updatedeleteoperator'
        ],$data);
        // ->with(['inputdata' => $searcheddata]);
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
        // $user = DB::select('select * from USER where ID_USER = ?', [$id]);
        $user = DB::table('USER')->where('ID_USER','=',$id)->first();
        $arrayvalue = get_object_vars($user);
        $idrole = $arrayvalue['ROLE'];
        $role = DB::table('USER')->select('ROLE')->groupBy('ROLE')->where('ROLE','!=',$idrole)->get();
        return view('updateoperator',[
            'title'=>'updateoperator',
            'data'=>$user,
            'role'=>$role
        ]);
    }
    public function deleteoperator($id){
        DB::delete('delete from USER where ID_USER = ?', [$id]);
        return redirect('updatedeleteoperator')->with('success','Data Terhapus');
    }
    public function updateoperator(Request $request,$id){
        $request->validate([
            'Username' => 'required',
            'Password' => 'required|min:3',
            'PasswordConfirmation' => 'required|min:3'
        ]);
        $user_username = $request->input('Username');
        $user_password = $request->input('Password');
        $user_role = $request->input('role');
        $user_passwordconfirmation = $request->input('PasswordConfirmation');
        if($user_password != $user_passwordconfirmation){
            return redirect('updatedeleteoperator')->with('fail','Data Tidak Berhasil Diupdate!');
        }
        else{
             DB::update('update USER set USERNAME = ?, PASSWORD = ?, ROLE = ? where ID_USER = ?', [$user_username,$user_password,$user_role,$id]);
             return redirect('updatedeleteoperator')->with('successupdate','Data Berhasil Diupdate!');
        }
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
