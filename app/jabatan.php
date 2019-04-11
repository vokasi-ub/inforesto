<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class jabatan extends Model
{
    protected $table = 'jabatan';
    protected $primaryKey = 'id_jabatan';
    protected $fillable =['nama_jabatan','jumlah'];
    public $timestamps = false;
}
