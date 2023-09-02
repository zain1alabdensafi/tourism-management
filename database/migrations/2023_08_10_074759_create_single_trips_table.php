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
        Schema::create('single_trips', function (Blueprint $table) {
            $table->id();
            $table->foreignId('airline_id')->constrained('airlines');
            $table->foreignId('airport_id')->constrained('airports');
            $table->string('source');
            $table->string('departure_airport');
            $table->string('destination');
            $table->string('arrival_airport');
            $table->string('starting_time');
            $table->string('ending_time');
            $table->unsignedBigInteger('number_of_person');
            $table->boolean('is_available');
            $table->unsignedBigInteger('count')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trips');
    }
};
