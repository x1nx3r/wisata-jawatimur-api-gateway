<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up()
    {
        Schema::create("api_keys", function (Blueprint $table) {
            $table->id();
            $table->foreignId("user_id")->constrained()->onDelete("cascade");
            $table->string("name")->nullable(); // For users to label their keys
            $table->string("key", 64)->unique(); // The actual API key
            $table->text("description")->nullable();
            $table->boolean("is_active")->default(true);
            $table->timestamp("last_used_at")->nullable();
            $table->timestamp("expires_at")->nullable(); // Optional: for key expiration
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists("api_keys");
    }
};
