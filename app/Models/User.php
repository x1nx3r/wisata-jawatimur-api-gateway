<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasMany;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = ["name", "email", "password"];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */
    protected $hidden = ["password", "remember_token"];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */
    protected function casts(): array
    {
        return [
            "email_verified_at" => "datetime",
            "password" => "hashed",
        ];
    }

    /**
     * Get the API keys for the user.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function apiKeys(): HasMany
    {
        return $this->hasMany(ApiKey::class);
    }

    /**
     * Generate a new API key for the user.
     *
     * @param string|null $name
     * @param string|null $description
     * @param \DateTime|null $expiresAt
     * @return \App\Models\ApiKey
     */
    public function createApiKey(
        ?string $name = null,
        ?string $description = null,
        ?\DateTime $expiresAt = null
    ): ApiKey {
        return $this->apiKeys()->create([
            "name" => $name,
            "key" => ApiKey::generateKey(),
            "description" => $description,
            "expires_at" => $expiresAt,
        ]);
    }
}
