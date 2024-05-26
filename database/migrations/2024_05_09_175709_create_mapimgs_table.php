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
        Schema::create('mapimgs', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->unsignedBiginteger('camp_ground_id');
            $table->timestamps();

            $table->foreign('camp_ground_id')->references('id')->on('camp_grounds');

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mapimgs');
    }
};
