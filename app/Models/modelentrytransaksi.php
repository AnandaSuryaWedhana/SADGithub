<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modelentrytransaksi;

class modelentrytransaksi extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'SIMPAN';
    public $timestamp = false;
    public $sortable = [
        'ID_TRANSAKSI','ID_PEMBELI','ID_KATEGORI', 'ID_PRODUK','NAMA_PRODUK', 'DESKRIPSI_PRODUK','HARGA_PRODUK', 'QTY','DEL'
    ];
    public function pembeli(){
        return $this->belongsTo(modelupdatedeletepembeli::class, 'ID_PEMBELI', 'ID_PEMBELI');
    }
    public function produk(){
        return $produk->belongsTo(modelupdatedeleteproduk::class, 'ID_PRODUK', 'ID_PRODUK');
    }
    function get_idtransaksi(){
        $sekarang = date("Y-m-d h:i:sa");
        $querycallfunctionid = "call fIDTRANSAKSI($sekarang)";
        $excecutequeryfunctionid = DB::select($querycallfunctionid,$sekarang);
        return $excecutequeryfunctionid;
    }
    function get_masukin($id,$idtransaksi){
        $queryinsertawal = "insert into SIMPAN (ID_PEMBELI, ID_TRANSAKSI,ID_KATEGORI,ID_PRODUK,NAMA_PRODUK,DESKRIPSI_PRODUK,HARGA_PRODUK,QTY,DEL) VALUES(:id,:idtransaksi,0,0,0,0,0,0,0);";
        $excecutequeryinsertawal = DB::select($queryinsertawal,$id);
        return $excecutequeryinsertawal;
    }
    
}
