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
        Schema::create('camp_doctor_guid', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('camp_ground_id');
            $table->unsignedBiginteger('doctor_id');
            $table->unsignedBiginteger('guide_id');
            $table->string('name');
            $table->string('display_name');
            $table->timestamps();


            $table->foreign('camp_ground_id')->references('id')->on('camp_grounds');
            $table->foreign('doctor_id')->references('id')->on('doctors');
            $table->foreign('guide_id')->references('id')->on('guides');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camp_doctor_guid');
    }
};
