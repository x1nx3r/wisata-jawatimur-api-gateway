<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    protected $fillable = ['nama_daerah'];

    public function wisatas()
    {
        return $this->hasMany(Wisata::class, 'id_daerah');
    }
}


