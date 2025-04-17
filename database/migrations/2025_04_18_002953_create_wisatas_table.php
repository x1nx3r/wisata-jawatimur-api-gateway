<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWisatasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create("wisatas", function (Blueprint $table) {
            $table->id();
            $table->foreignId("id_daerah")->constrained("daerahs");
            $table->string("nama");
            $table->text("alamat");
            $table->string("link_gmaps");
            $table->string("rating");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists("wisatas");
    }
}
