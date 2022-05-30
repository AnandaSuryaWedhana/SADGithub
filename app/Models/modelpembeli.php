<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\modellaporantransaksi;

class modelpembeli extends Model
{
    use HasFactory;
    protected $table = 'PEMBELI';
    protected $primarykey = 'ID_PEMBELI';
    public $timestamp = false;
    public $fillable = ['NAMA_PEMBELI'];
    public function transaksi(){
        return $this->hasMany(modellaporantransaksi::class);
    }
}
