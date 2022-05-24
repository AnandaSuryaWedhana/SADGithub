<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class portofolioprodukmarketing extends Model
{
    use HasFactory;
    protected $table = 'PRODUK';
    protected $primarykey = 'ID_PEMBELI';
    public $timestamp = false;
}
