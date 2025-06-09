<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    protected $fillable = ['nama_provinsi'];

    public function daerahs()
    {
        return $this->hasMany(Daerah::class, 'id_provinsi');
    }
}


