<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class karyawan extends Model
{
    protected $table = 'karyawan';
    protected $primaryKey = 'id_karyawan';
    protected $fillable = [
        'id_jabatan', 'nama','email','alamat','image'
    ];
    public $timestamps = false;

    public function get_jabatan()
    {
        return $this->belongsTo(jabatan::class, 'id_jabatan');
    }
}
