<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class ApiKey extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "key",
        "description",
        "is_active",
        "expires_at",
    ];

    protected $casts = [
        "is_active" => "boolean",
        "last_used_at" => "datetime",
        "expires_at" => "datetime",
    ];

    /**
     * Get the user that owns the API key.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Generate a new API key.
     *
     * @return string
     */
    public static function generateKey()
    {
        return Str::random(64);
    }

    /**
     * Update the last used timestamp.
     *
     * @return bool
     */
    public function markAsUsed()
    {
        return $this->update([
            "last_used_at" => now(),
        ]);
    }
}
