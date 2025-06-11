<?php
// app/Models/Wisata.php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Wisata extends Model
{
    use HasFactory;

    protected $fillable = [
        "id_daerah",
        "nama",
        "alamat",
        "rating",
        "link_gmaps",
    ];

    // Hide timestamps from JSON output
    protected $hidden = ["created_at", "updated_at"];

    protected $casts = [
        "rating" => "decimal:1",
    ];

    public function daerah()
    {
        return $this->belongsTo(Daerah::class, "id_daerah");
    }
}
