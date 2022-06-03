<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class modelupdatedeletetransaksi extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'TRANSAKSI';
    protected $primarykey = 'ID_TRANSAKSI';
    public $timestamp = false;
    public $sortable = [
        'ID_TRANSAKSI','ID_PEMBELI','TANGGAL_TRANSAKSI','JUMLAHPRODUK_TRANSAKSI','TOTAL_TRANSAKSI', 'PEMBAYARAN_DITERIMA','STATUS_DEALTRANSAKSI'
    ];
}
