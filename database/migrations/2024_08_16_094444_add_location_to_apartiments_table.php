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
        Schema::table('apartiments', function (Blueprint $table) {
            $table->string('location')->nullable(); // Adjust the column type and options as needed
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('apartiments', function (Blueprint $table) {
            $table->dropColumn('location'); // This should match the column name used in the up() method
        });
    }
};
