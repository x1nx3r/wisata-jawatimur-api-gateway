<?php
// database/migrations/xxxx_xx_xx_create_api_keys_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up()
    {
        Schema::create("api_keys", function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->string("name")->nullable();
            $table->string("key")->nullable(); // Keep for potential backward compatibility
            $table->text("description")->nullable();
            $table->string("jti")->unique(); // JWT ID
            $table->json("scopes")->nullable(); // JWT scopes
            $table->boolean("is_active")->default(true);
            $table->timestamp("last_used_at")->nullable();
            $table->string("last_used_ip")->nullable();
            $table->timestamp("expires_at")->nullable();
            $table->timestamp("revoked_at")->nullable();
            $table->timestamps();

            // Indexes
            $table->index(["user_id", "is_active"]);
            $table->index("jti");
            $table->index("revoked_at");
            $table->index("last_used_at");
        });
    }

    public function down()
    {
        Schema::dropIfExists("api_keys");
    }
};
