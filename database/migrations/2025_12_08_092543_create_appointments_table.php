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
        Schema::create('appointments', function (Blueprint $table) {
            $table->id();
            $table->string('patient_name', 150);
            $table->string('patient_email', 150);
            $table->string('patient_phone', 10);
            $table->foreignId('doctor_id')->constrained('doctors')->onDelete('cascade');
            $table->foreignId('slot_id')->constrained('time_slots')->onDelete('cascade');
            $table->date('appointment_date');
            $table->string('status', 20)->comment('confirmed, cancelled')->default('confirmed');
            $table->unique(['doctor_id', 'slot_id', 'appointment_date']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('appointments');
    }
};
