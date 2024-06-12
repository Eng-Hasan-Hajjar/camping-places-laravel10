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
        Schema::create('camp_doctor_guids', function (Blueprint $table) {
            $table->id();

            $table->unsignedBiginteger('camp_ground_id')->constrained()->onDelete('cascade');;
            $table->unsignedBiginteger('doctor_id')->constrained()->onDelete('cascade');;
            $table->unsignedBiginteger('guide_id')->constrained()->onDelete('cascade');;
            $table->string('name');
            $table->string('display_name');
            $table->timestamps();


            $table->foreign('camp_ground_id')->references('id')->on('camp_grounds')->onDelete('cascade');
            $table->foreign('doctor_id')->references('id')->on('doctors')->onDelete('cascade');
            $table->foreign('guide_id')->references('id')->on('guides')->onDelete('cascade');


        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('camp_doctor_guids');
    }
};
