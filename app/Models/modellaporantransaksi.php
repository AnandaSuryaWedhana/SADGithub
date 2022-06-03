<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;
use App\Models\modelpembeli;

class modellaporantransaksi extends Model
{
    use HasFactory;
    use Sortable;
    protected $table = 'DEAL_TRANSAKSI';
    protected $primarykey = 'ID_TRANSAKSI';
    protected $fillable = ['ID_TRANSAKSI'];
    public $timestamp = false;
    public function pembeli(){
        return $this->belongsTo(modelpembeli::class,'foreign_key','ID_PEMBELI');
        //  return $this->hasOneThrough(modellaporantransaksi::class,modelpembeli::class,'ID_PEMBELI','ID_PEMBELI');

    }
}
