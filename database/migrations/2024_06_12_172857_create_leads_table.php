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
        Schema::create('leads', function (Blueprint $table) {
            $table->id();
            $table->string('gclid');
            $table->string('email')->nullable();
            $table->string('phone_number')->nullable();
            $table->string('conversion_time');
            $table->string('conversion_value')->nullable();
            $table->string('order_id')->nullable();
            $table->enum('status', ['unqualified', 'qualified', 'converted'])->default('unqualified');
            $table->foreignId('lead_info_id')->constrained()->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('unqualified_leads');
    }
};
