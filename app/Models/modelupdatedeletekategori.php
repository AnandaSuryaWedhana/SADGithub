<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class modelupdatedeletekategori extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'KATEGORI';
    protected $primarykey = 'ID_KATEGORI';
    public $timestamp = false;
    public $sortable = [
        'ID_KATEGORI','NAMA_KATEGORI','DESKRIPSI_KATEGORI'
    ];
}
