<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class modelupdatedeletepembeli extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'PEMBELI';
    protected $primarykey = 'ID_PEMBELI';
    public $timestamp = false;
    public $sortable = [
        'ID_PEMBELI','NAMA_PEMBELI','ALAMAT_PEMBELI','TELPHONE_PEMBELI','JUMLAHPRODUK_TRANSAKSI'
    ];
}
