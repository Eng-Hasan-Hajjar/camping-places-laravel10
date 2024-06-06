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

            $table->unsignedBiginteger('user_id');
            $table->unsignedBiginteger('camp_doctor_guid_id')->constrained()->onDelete('cascade');;

            $table->dateTime('start_date');
            $table->dateTime('end_date');


            $table->foreign('user_id')->references('id')->on('users');

            $table->foreign('camp_doctor_guid_id')->references('id')->on('camp_doctor_guids');
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
