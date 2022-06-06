<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class modelupdatedeleteproduk extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'PRODUK';
    protected $primarykey = 'ID_PRODUK';
    public $timestamp = false;
    public $sortable = [
        'ID_PRODUK','ID_KATEGORI','NAMA_PRODUK', 'DEKSRIPSI_PRODUK','HARGA_PRODUK', 'FOTO_PRODUK','JUMLAHPRODUK_TRANSAKSI'
    ];
}
