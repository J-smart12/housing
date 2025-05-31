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
        Schema::create('offer_type_properties', function (Blueprint $table) {
            $table->foreignId('offer_type_id')->constrained()->onDelete('cascade');
            $table->foreignId('properties_id')->constrained()->onDelete('cascade');
            $table->primary(['offer_type_id', 'properties_id']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('offer_type_properties');
    }
};
