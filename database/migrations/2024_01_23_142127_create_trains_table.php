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
        Schema::create('trains', function (Blueprint $table) {
            $table->id();
            $table->string("agency");
            $table->string("departure_station")->nullable();
            $table->string("arrival_station")->nullable();
            $table->time("departure_time")->nullable();
            $table->time("arrival_time")->nullable();
            $table->string("train_code", 6)->unique();
            $table->string("carriage_number");
            $table->boolean("train_cancelled")->default(1);
            $table->boolean("in_time")->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('trains');
    }
};
