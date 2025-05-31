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
        Schema::create('feature_property', function (Blueprint $table) {
            $table->foreignId('feature_id')->constrained()->onDelete('cascade');
            $table->foreignId('properties_id')->constrained()->onDelete('cascade');
            $table->primary(['feature_id', 'properties_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('feature_property');
    }
};
