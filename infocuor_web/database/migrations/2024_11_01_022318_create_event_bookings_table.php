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
        Schema::create('event_bookings', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('user_id'); // Add the user_id column
            $table->string('name');
            $table->string('email');
            $table->string('phone');
            $table->string('event_name');
            $table->date('date');
            $table->time('time');
            $table->string('event_location');
            $table->string('faculty');
            $table->string('department')->nullable(); // Can be null
            // Requirements (checkboxes)
            $table->boolean('photography')->default(false);
            $table->boolean('videography')->default(false);
            $table->boolean('live_streaming')->default(false);
            $table->boolean('media_reporting')->default(false);
            
            $table->timestamps();

            // Foreign key constraint linking to users table
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('event_bookings');
    }
};
