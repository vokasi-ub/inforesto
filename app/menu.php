<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class menu extends Model
{
    protected $table = 'menu';
    protected $fillabel =['id','kategori','deskripsi'];
    public $timestamps = true;
}
