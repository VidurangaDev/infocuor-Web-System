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
        Schema::create('budgets', function (Blueprint $table) {
            $table->id();

            $table->string('event_name');
            $table->decimal('income', 10, 2)->default(0);
            $table->decimal('outcome', 10, 2)->default(0);
            $table->decimal('deposited_amount', 10, 2)->default(0);
            $table->timestamp('event_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('budgets');

    }
};
