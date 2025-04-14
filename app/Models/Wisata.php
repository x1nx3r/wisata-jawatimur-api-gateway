<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    protected $fillable = ['id_daerah', 'nama', 'alamat', 'rating', 'link_gmaps'];

    public function daerah()
    {
        return $this->belongsTo(Daerah::class, 'id_daerah');
    }
}
