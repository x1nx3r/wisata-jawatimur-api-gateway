<?php
// app/Models/Provinsi.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provinsi extends Model
{
    use HasFactory;

    protected $fillable = ["nama_provinsi"];

    // Hide timestamps from JSON output
    protected $hidden = ["created_at", "updated_at"];

    public function daerahs()
    {
        return $this->hasMany(Daerah::class, "id_provinsi");
    }
}
