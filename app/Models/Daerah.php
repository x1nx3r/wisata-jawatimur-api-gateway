<?php
// app/Models/Daerah.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Daerah extends Model
{
    use HasFactory;

    protected $fillable = ["nama_daerah", "id_provinsi"];

    // Hide timestamps from JSON output
    protected $hidden = ["created_at", "updated_at"];

    public function provinsi()
    {
        return $this->belongsTo(Provinsi::class, "id_provinsi");
    }

    public function wisatas()
    {
        return $this->hasMany(Wisata::class, "id_daerah");
    }
}
