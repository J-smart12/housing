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
        Schema::create('properties', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('slug');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('excerpt')->nullable();
            $table->string('link');
            $table->string('image_srcset')->nullable();
            $table->string('image')->nullable();
            $table->string('address')->nullable();
            $table->string('neighborhood')->nullable();
            $table->string('street')->nullable();
            $table->text('details')->nullable();
            $table->date('date_listed')->nullable();
            $table->string('days_ago')->nullable();
            $table->string('type')->nullable();
            $table->string('label')->nullable();
            $table->string('plan1')->nullable();
            $table->string('plan2')->nullable();
            $table->string('city')->nullable();
            $table->boolean('is_featured')->default(false);
            $table->string('status')->nullable();
            $table->string('payment_status')->nullable();
            $table->string('attribute_classes')->nullable();
            $table->integer('property_size')->nullable();
            $table->date('date')->nullable();
            $table->decimal('price', 12, 3)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('properties');
    }
};
