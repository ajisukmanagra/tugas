<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class pelanggan extends Model
{
    protected $table = 'pelanggan';
    protected $fillable = ['nama_pelanggan','no_hp','no_ktp','nik'];
}
