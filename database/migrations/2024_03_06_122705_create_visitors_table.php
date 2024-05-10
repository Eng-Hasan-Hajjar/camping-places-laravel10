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
        Schema::create('visitors', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->Integer('phone');
            $table->string('work');
            $table->string('hobby');
            $table->string('nationality')->default('عربي سوري');
            $table->string('current_location')->default('حلب');
            $table->boolean('gender')->default(false);
            $table->integer('num_companion');
            $table->boolean('is_phobia_dark')->default(false);
            $table->boolean('is_phobia_animals')->default(false);
            $table->boolean('is_phobia_fly')->default(false);
            $table->boolean('is_phobia_see')->default(false);
            $table->boolean('is_phobia_open_space')->default(false);
            $table->boolean('is_phobia_hights')->default(false);
            $table->date('birthday');


            $table->timestamps();
            // تعيين ترتيب الحقول
            $table->index('user_id');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('visitors');
    }
};
