<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class penduduk extends Model
{
    protected $table = 'penduduk';
    protected $fillabel =['id_penduduk','nama_penduduk','agama','pendidikan_terakhir','status'];
    public $timestamps = true;
}
