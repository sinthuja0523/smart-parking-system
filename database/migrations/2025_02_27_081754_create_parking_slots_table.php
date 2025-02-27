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
        Schema::create('parkingslots', function (Blueprint $table) {
            $table->id();
            $table->string('slot_name');
            $table->string('location');
            $table->date('date');
            $table->time('time');
            $table->enum('status', ['available', 'booked', 'processing']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('parkingslots');
    }
};
