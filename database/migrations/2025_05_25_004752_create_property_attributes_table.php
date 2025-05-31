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
        Schema::create('property_attributes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('properties_id')->constrained()->onDelete('cascade');
            $table->string('name');
            $table->string('slug');
            $table->boolean('has_archive')->default(true);
            $table->string('display_after');
            $table->string('icon');
            $table->boolean('show')->default(true);
            $table->boolean('card_show')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('property_attributes');
    }
};
