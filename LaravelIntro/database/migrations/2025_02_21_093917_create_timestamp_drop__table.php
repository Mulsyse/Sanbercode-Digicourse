<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->droptimestamps();

        });

        Schema::table('genres', function (Blueprint $table) {
            //
            $table->droptimestamps();

        });

        Schema::table('casts', function (Blueprint $table) {
            //
            $table->droptimestamps();

        });

        Schema::table('profile', function (Blueprint $table) {
            //
            $table->droptimestamps();

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
    Schema::dropIfExists('timestamp_drop_');
    }
};
