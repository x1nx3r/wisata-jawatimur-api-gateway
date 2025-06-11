<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class ApiKey extends Model
{
    use HasFactory;

    protected $fillable = [
        "user_id",
        "name",
        "description",
        "jti", // JWT ID - replaces 'key'
        "scopes", // JWT scopes/permissions
        "expires_at",
        "last_used_at", // Add to fillable
        "last_used_ip", // Add for tracking
        "is_active",
        "revoked_at", // Add for JWT revocation tracking
    ];

    protected $casts = [
        "scopes" => "array", // JWT scopes as JSON array
        "is_active" => "boolean",
        "last_used_at" => "datetime",
        "expires_at" => "datetime",
        "revoked_at" => "datetime", // Add for revocation timestamp
    ];

    protected $hidden = [
        "jti", // Hide the full JTI for security
    ];

    /**
     * Get the user that owns the API key.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Check if the API key is expired.
     */
    public function isExpired(): bool
    {
        return $this->expires_at && $this->expires_at->isPast();
    }

    /**
     * Check if the API key is active (not revoked, not expired, and is_active = true).
     */
    public function isActive(): bool
    {
        return $this->is_active && !$this->isExpired() && !$this->revoked_at;
    }

    /**
     * Check if the API key has a specific scope.
     */
    public function hasScope(string $scope): bool
    {
        return in_array($scope, $this->scopes ?? []);
    }

    /**
     * Check if the API key has any of the given scopes.
     */
    public function hasAnyScope(array $scopes): bool
    {
        return !empty(array_intersect($scopes, $this->scopes ?? []));
    }

    /**
     * Check if the API key has all of the given scopes.
     */
    public function hasAllScopes(array $scopes): bool
    {
        return empty(array_diff($scopes, $this->scopes ?? []));
    }

    /**
     * Revoke the API key.
     */
    public function revoke(): bool
    {
        return $this->update([
            "is_active" => false,
            "revoked_at" => now(),
        ]);
    }

    /**
     * Update the last used timestamp and IP.
     */
    public function markAsUsed(?string $ipAddress = null): bool
    {
        return $this->update([
            "last_used_at" => now(),
            "last_used_ip" => $ipAddress ?? request()->ip(),
        ]);
    }

    /**
     * Get a masked version of the JTI for display purposes.
     * Shows only first and last 4 characters for security.
     */
    public function getMaskedJtiAttribute(): string
    {
        if (!$this->jti || strlen($this->jti) <= 8) {
            return str_repeat("*", 8);
        }

        return substr($this->jti, 0, 4) .
            str_repeat("*", strlen($this->jti) - 8) .
            substr($this->jti, -4);
    }

    /**
     * Get the status of the API key.
     */
    public function getStatusAttribute(): string
    {
        if (!$this->is_active || $this->revoked_at) {
            return "revoked";
        }

        if ($this->isExpired()) {
            return "expired";
        }

        return "active";
    }

    /**
     * Get human-readable scopes.
     */
    public function getReadableScopesAttribute(): array
    {
        $scopeLabels = [
            "read" => "Read Access",
            "write" => "Write Access",
            "delete" => "Delete Access",
            "admin" => "Administrator Access",
        ];

        return array_map(
            fn($scope) => $scopeLabels[$scope] ?? ucfirst($scope),
            $this->scopes ?? []
        );
    }

    /**
     * Get the number of days since the key was last used.
     */
    public function getDaysSinceLastUseAttribute(): ?int
    {
        return $this->last_used_at
            ? $this->last_used_at->diffInDays(now())
            : null;
    }

    /**
     * Scope: Get only active API keys.
     */
    public function scopeActive($query)
    {
        return $query
            ->where("is_active", true)
            ->whereNull("revoked_at")
            ->where(function ($q) {
                $q->whereNull("expires_at")->orWhere("expires_at", ">", now());
            });
    }

    /**
     * Scope: Get expired API keys.
     */
    public function scopeExpired($query)
    {
        return $query->where("expires_at", "<=", now());
    }

    /**
     * Scope: Get revoked API keys.
     */
    public function scopeRevoked($query)
    {
        return $query->where("is_active", false)->orWhereNotNull("revoked_at");
    }

    /**
     * Scope: Get keys with specific scope.
     */
    public function scopeWithScope($query, string $scope)
    {
        return $query->whereJsonContains("scopes", $scope);
    }
}
