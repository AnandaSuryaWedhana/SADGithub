<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use App\Models\Modelentryproduktransaksi;


class Modelentryproduktransaksi extends Model
{
    use HasFactory;
    
    protected $table = 'SIMPAN';
    public $timestamp = false;
    public $sortable = [
        'ID_TRANSAKSI','ID_PEMBELI','ID_KATEGORI', 'ID_PRODUK','NAMA_PRODUK', 'DESKRIPSI_PRODUK','HARGA_PRODUK', 'QTY','DEL'
    ];
    function get_idtransaksi(){
        $sekarang = date("Y-m-d h:i:sa");
        $querycallfunctionid = "call fIDTRANSAKSI($sekarang)";
        $excecutequeryfunctionid = DB::select($querycallfunctionid,$sekarang);
        return $excecutequeryfunctionid;
    }
    function get_masukin($id,$idtransaksi){
        $queryinsertawal = DB::insert('insert into SIMPAN (ID_PEMBELI, ID_TRANSAKSI,ID_KATEGORI,ID_PRODUK,NAMA_PRODUK,DESKRIPSI_PRODUK,HARGA_PRODUK,QTY,DEL) values (?,?,0,0,0,0,0,0,0)', [$id,$idtransaksi]);
        $excecutequeryinsertawal = DB::select($queryinsertawal,$id);
        return $excecutequeryinsertawal;
        
    }
}
