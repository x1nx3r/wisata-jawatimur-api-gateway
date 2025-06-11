<?php
// database/migrations/2025_06_11_161128_add_provinsi_id_to_daerahs_table.php

use Illuminate\Database\Migrations\Migration; // <- This line was missing!
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddProvinsiIdToDaerahsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table("daerahs", function (Blueprint $table) {
            // Use id_provinsi instead of provinsi_id to match your SQL dump
            $table
                ->foreignId("id_provinsi")
                ->after("id")
                ->constrained("provinsis", "id")
                ->onDelete("cascade");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::table("daerahs", function (Blueprint $table) {
            $table->dropForeign(["id_provinsi"]);
            $table->dropColumn("id_provinsi");
        });
    }
}
