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
        Schema::table('event_bookings', function (Blueprint $table) {
            $table->enum('tracking_status', ['Covering', 'Selecting', 'Editing', 'Finishing', 'Completed'])->default('Covering');
            $table->boolean('service_completed')->default(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('event_bookings', function (Blueprint $table) {
            $table->dropColumn('tracking_status');
            $table->dropColumn('service_completed');
        });
    }
};
