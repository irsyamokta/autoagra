<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('flight_data', function (Blueprint $table) {
            $table->id();
            $table->integer('flight_time');
            $table->decimal('pesticide_liters', 8, 2);
            $table->integer('number_of_flights');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('flight_data');
    }
};
