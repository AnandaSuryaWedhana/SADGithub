<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class modellaporantransaksi extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'DEAL_TRANSAKSI';
    protected $primarykey = 'ID_TRANSAKSI';
    public $timestamp = false;
    public $sortable = [
        'ID_TRANSAKSI', 'PEMBELI.NAMA_PEMBELI', 'ID_PEMBELI'
    ];
}
