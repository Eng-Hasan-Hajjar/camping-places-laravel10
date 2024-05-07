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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();

            $table->Integer('user_id');
            $table->Integer('camp_ground_id');
            $table->Integer('doctor_id');
            $table->Integer('guide_id');

            $table->dateTime('start_date');
            $table->dateTime('end_date');

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('camp_ground_id')->references('id')->on('camp_grounds');

            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('guide_id')->references('id')->on('guides');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
