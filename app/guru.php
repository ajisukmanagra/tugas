<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class guru extends Model
{
    protected $table = 'guru';
    protected $fillable = ['nama_guru','ktp','nip','mapel'];
}
