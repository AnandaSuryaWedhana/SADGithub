<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class modelupdatedeletepembeli extends Model
{
    use HasFactory;
    protected $table = 'PEMBELI';
    protected $primarykey = 'ID_PEMBELI';
    public $timestamp = false;
}
