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
        Schema::create('apartiments', function (Blueprint $table) {
            $table->id();
            $table->string('apartiment_tittle')->nullable();
            $table->string('image')->nullable();
            $table->longtext('description')->nullable();
            $table->string('price')->nullable();
            $table->string('wifi')->default('yes');
            $table->string('apartiment_type')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('apariments');
    }
};
